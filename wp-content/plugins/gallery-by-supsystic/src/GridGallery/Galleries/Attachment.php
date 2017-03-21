<?php

class GridGallery_Galleries_Attachment
{

    public function getAttachment($attachmentId, $width = null, $height = null, $crop = false, $bookId = false)
    {
        $width = (int)$width;
        $height = (int)$height;

        $cachedUrl = $this->getAttachUrlCached($attachmentId, $width, $height, $crop, $bookId);
        if($cachedUrl)
            return $cachedUrl;

        $attachment = wp_prepare_attachment_for_js($attachmentId);
        $filePath = $this->getFilePath($attachment['url']);

        // First try:
        // Trying to find image in wordpress sizes.
        if(!empty($attachment) && $attachment['sizes']) {
            foreach ($attachment['sizes'] as $size) {
                if (($width && $width === $size['width'])
                    && ($height && $height === $size['height'])
                ) {
                    $this->saveAttachUrlCached($attachmentId, $width, $height, $crop, $bookId, $size['url']);
                    return $size['url'];
                }
            }
        }

        // Second try
        // Trying to find cropped images.
        $filename = pathinfo($filePath, PATHINFO_FILENAME);
        $filename = $filename . '-' . $width . 'x' . $height . '.' . pathinfo($filePath, PATHINFO_EXTENSION);

        if (is_file($file = dirname($filePath) . '/' . $filename)) {
            $imgUrl = str_replace(ABSPATH, get_bloginfo('wpurl') . '/', $file);
            $this->saveAttachUrlCached($attachmentId, $width, $height, $crop, $bookId, $imgUrl);
            return str_replace(ABSPATH, get_bloginfo('wpurl') . '/', $file);
        }

        // Third and last try
        $editor = wp_get_image_editor($filePath);

        if (!has_filter('image_resize_dimensions', 'image_crop_dimensions')) {
            
            function image_crop_dimensions($default, $orig_w, $orig_h, $new_w, $new_h, $crop){
                if (!$crop || !$new_w || !$new_h) return null;
                $size_ratio = max($new_w / $orig_w, $new_h / $orig_h);
                $crop_w = round($new_w / $size_ratio);
                $crop_h = round($new_h / $size_ratio);
                $s_x = floor( ($orig_w - $crop_w) / 2 );
                $s_y = floor( ($orig_h - $crop_h) / 2 );
                return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
            }
            add_filter('image_resize_dimensions', 'image_crop_dimensions', 10, 6);
        }

        

        if (is_wp_error($editor) || is_wp_error($editor->resize($width, $height, (bool) $crop))) {
            $imgUrl = isset($attachment['sizes'], $attachment['sizes']['full'], $attachment['sizes']['full']['url'])
                ? $attachment['sizes']['full']['url']
                : $attachment['url'];
            $this->saveAttachUrlCached($attachmentId, $width, $height, $crop, $bookId, $imgUrl);
            return $imgUrl;
        }

        if (is_wp_error($data = $editor->save())) {
            return $attachment['sizes']['full']['url'];
        }

        $editor = null;
        unset($editor);

        $imgUrl = str_replace(ABSPATH, get_bloginfo('wpurl') . '/', $data['path']);
        $this->saveAttachUrlCached($attachmentId, $width, $height, $crop, $bookId, $imgUrl);
        return str_replace(ABSPATH, get_bloginfo('wpurl') . '/', $data['path']);
    }

    protected function getFilePath($url)
    {
        $basepath = untrailingslashit(ABSPATH);

        return $basepath . str_replace(get_bloginfo('wpurl'), '', $url);
    }

    protected function getAttachUrlCached($attachmentId, $width, $height, $crop, $bookId) {
        $cachedBookData = get_option('gallery_imgs_cache_'. $bookId);
        if(!empty($cachedBookData)) {
            $attachKey = $this->getAttachCachedKey($attachmentId, $width, $height, $crop, $bookId);
            if(isset($cachedBookData[ $attachKey ]) && !empty($cachedBookData[ $attachKey ])) {
                return str_replace('[SITE_URL]', get_bloginfo('wpurl'), $cachedBookData[ $attachKey ]);
            }
        }
        return false;
    }
    protected function saveAttachUrlCached($attachmentId, $width, $height, $crop, $bookId, $imgUrl) {
        $cachedBookData = get_option('gallery_imgs_cache_'. $bookId);
        if(empty($cachedBookData))
            $cachedBookData = array();
        $attachKey = $this->getAttachCachedKey($attachmentId, $width, $height, $crop, $bookId);
        $cachedBookData[ $attachKey ] = str_replace(get_bloginfo('wpurl'), '[SITE_URL]', $imgUrl);
        update_option('gallery_imgs_cache_'. $bookId, $cachedBookData);
    }
    protected function getAttachCachedKey($attachmentId, $width, $height, $crop, $bookId) {
        return ($attachmentId. '_'. $width. '_'. $height. '_'. ($crop ? '1' : '0'));
    }

}
