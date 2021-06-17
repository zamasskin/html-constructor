<?php
namespace HtmlConstructor\Traits\Tags;

use HtmlConstructor\Tags as HtmlTags;

trait ImageAndMultimedia {
    static function Area() {
        return new HtmlTags\ImageAndMultimedia\Area();
    }

    static function Audio($src = false) {
        return new HtmlTags\ImageAndMultimedia\Audio($src);
    }

    static function Img($src = false, $alt = false) {
        return new HtmlTags\ImageAndMultimedia\Img($src, $alt);
    }

    static function Map($name = false) {
        return new HtmlTags\ImageAndMultimedia\Map($name);
    }

    static function Track() {
        return new HtmlTags\ImageAndMultimedia\Track();
    }

    static function Video($src = false) {
        return new HtmlTags\ImageAndMultimedia\Video($src);
    }

}