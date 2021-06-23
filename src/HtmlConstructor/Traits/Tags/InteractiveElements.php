<?php
namespace HtmlConstructor\Traits\Tags;

use HtmlConstructor\Tags as HtmlTags;

trait InteractiveElements {
    static function Details() {
        return new HtmlTags\InteractiveElements\Details();
    }
}