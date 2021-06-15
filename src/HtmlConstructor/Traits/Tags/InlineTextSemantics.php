<?php
namespace HtmlConstructor\Traits\Tags;

use HtmlConstructor\Tags as HtmlTags;

trait InlineTextSemantics {
    static function A($href = false, $contains = false) {
        return new HtmlTags\InlineTextSemantics\A($href, $contains);
    }
}