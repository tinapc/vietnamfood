<?php

if (!function_exists('cover_image_path'))
{
    function cover_image_path($pathImage)
    {
        return str_replace(array('tamdiem.home', 'lienviet.app', 'tamdiem.com.vn', 'trungdungmedia.app','www.trungdungmedia.app', 'vietnamesefood.app'), $_SERVER['HTTP_HOST'], $pathImage);
    }
}