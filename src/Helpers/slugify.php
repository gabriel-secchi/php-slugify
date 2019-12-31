<?php

use PhpSlugify\Slugify;

if (!function_exists('slug')) {
    function slug($texto, $separador) {
        return Slugify::convert($texto, $separador);
    }
}
