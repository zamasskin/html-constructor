<?php
namespace HtmlConstructor\Traits\Tags;

use HtmlConstructor\Tags as HtmlTags;

trait EmbeddedContent {
    static function Embed() {
        return new HtmlTags\EmbeddedContent\Embed();
    }
}