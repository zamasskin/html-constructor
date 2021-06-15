<?php
namespace HtmlConstructor\Traits\Tags;

use HtmlConstructor\Tags as HtmlTags;

trait ImageAndMultimedia {
    static function Img($src = false, $alt = false) {
        return new HtmlTags\ImageAndMultimedia\Img($src, $alt);
    }
}