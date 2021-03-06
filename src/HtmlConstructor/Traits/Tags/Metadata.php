<?php
namespace HtmlConstructor\Traits\Tags;

use HtmlConstructor\Tags as HtmlTags;

trait Metadata {
    static function Base($href = false) {
        return new HtmlTags\Metadata\Base($href);
    }

    static function Head() {
        return new HtmlTags\Metadata\Head();
    }

    static function Link($href=false, $rel=false) {
        return new HtmlTags\Metadata\Link($href, $rel);
    }

    static function Meta() {
        return new HtmlTags\Metadata\Meta();
    }

    static function Style() {
        return new HtmlTags\Metadata\Style();
    }

    static function Title() {
        return new HtmlTags\Metadata\Title();
    }
}