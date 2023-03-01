<?php
/**
 * Convert file url to path
 *
 * @param string $url Link to file
 *
 * @return bool|mixed|string
 */

function convert_url_to_path(string $url)
{
    if (!$url) {
        return false;
    }
    $url = str_replace(array('https://', 'http://'), '', $url);
    $home_url = str_replace(array('https://', 'http://'), '', home_url());
    $file_part = ABSPATH . str_replace($home_url, '', $url);
    $file_part = str_replace('wp//', '', $file_part);
    if (file_exists($file_part)) {
        return $file_part;
    }
    
    return false;
}

/**
 * Return/Output SVG as html
 *
 * @param array|string $img Image link or array
 * @param string $class Additional class attribute for img tag
 * @param string $size Image size if $img is array
 *
 * @return void
 */
function display_svg($img, string $class = '', string $size = 'medium')
{
    echo return_svg($img, $class, $size);
}

function return_svg($img, $class = '', $size = 'medium')
{
    if (!$img) {
        return '';
    }
    
    $file_url = is_array($img) ? $img['url'] : $img;
    
    $file_info = pathinfo($file_url);
    if ($file_info['extension'] == 'svg') {
        $file_path = convert_url_to_path($file_url);
        
        if (!$file_path) {
            return '';
        }
        
        $arrContextOptions = array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
            ),
        );
        $image = file_get_contents($file_path, false, stream_context_create($arrContextOptions));
        if ($class) {
            $image = str_replace('<svg ', '<svg class="' . esc_attr($class) . '" ', $image);
        }
        $image = preg_replace('/^(.*)?(<svg.*<\/svg>)(.*)?$/is', '$2', $image);
    } elseif (is_array($img)) {
        $image = wp_get_attachment_image($img['id'], $size, false, array('class' => $class));
    } else {
        $image = '<img class="' . esc_attr($class) . '" src="' . esc_url($img) . '" alt="' . esc_attr($file_info['filename']) . '"/>';
    };
    
    return $image;
}

// ACF link
function acf_link($link, $class = '')
{
    if ($link) {
        $title = $link['title'];
        $url = $link['url'];
        $target = $link['target'] ? 'target="' . $link['target'] . '"' : '';
        $class = $class ? 'class="' . $class . '"' : '';
        echo "<a href='{$url}' {$target} {$class}>{$title}</a>";
    }
    echo '';
}

// Background-image style
function bg($img = '', $size = '')
{
    $url = $size ? $img['sizes'][$size] : $img['url'];
    echo 'style="background-image: url(' . $url . ')"';
}

// Section anchor
function section_id($field): string
{
    if ($field) {
        echo 'id="' . $field . '"';
    }
    
    return '';
}

// Echo Picture element
function picture($mobile_image, $desktop_image)
{
    if ($desktop_image) {
        $mobile_url =  $mobile_image ? $mobile_image['sizes']['large'] : '';
        $desktop_url = $desktop_image['sizes']['large'];
        $desktop_alt =  $desktop_image['alt'] ? 'alt="' . $desktop_image['alt'] . '"' : '';
        $source = $mobile_url ? '<source srcset="' . $mobile_url . '" media="(max-width: 640px)">' : '';
        $img = "<img src='{$desktop_url}' {$desktop_alt}>";
        echo "<picture>{$source}{$img}</picture>";
    }
}
