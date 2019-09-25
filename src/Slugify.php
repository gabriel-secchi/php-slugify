<?php

namespace PhpSlugify;

/**
 * @package Slugify
 */
class Slugify
{
    public static function convert($text, $separator = '-')
    {
        if (empty($text)) {
            return '';
        }
        
        // replace non letter or digits by {$separator}
        $text = preg_replace('~[^\pL\d]+~u', $separator, $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        
        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
        
        // trim
        $text = trim($text, $separator);
        
        // remove duplicate -
        $text = preg_replace('~-+~', $separator, $text);
        
        // lowercase
        $text = strtolower($text);
        
        return $text;
    }
}
