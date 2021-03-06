<?php
namespace HtmlConstructor\Traits\Tags;

use HtmlConstructor\Tags as HtmlTags;

trait EmbeddedContent {
    static function Embed() {
        return new HtmlTags\EmbeddedContent\Embed();
    }

    static function Iframe($src = false) {
        return new HtmlTags\EmbeddedContent\Iframe($src);
    }

    static function Param($name = false, $value = false) {
        return new HtmlTags\EmbeddedContent\Param($name, $value);
    }

    static function Picture() {
        return new HtmlTags\EmbeddedContent\Picture();
    }

    static function Portal($src = false) {
        return new HtmlTags\EmbeddedContent\Portal($src);
    }

    static function Source($src = false, $type = false) {
        return new HtmlTags\EmbeddedContent\Source($src, $type);
    }

    static function Object($data = false, $type = false) {
        return new HtmlTags\EmbeddedContent\ObjectTag($data, $type);
    }
}