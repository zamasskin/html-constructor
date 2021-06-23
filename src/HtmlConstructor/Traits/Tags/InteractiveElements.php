<?php
namespace HtmlConstructor\Traits\Tags;

use HtmlConstructor\Tags as HtmlTags;

trait InteractiveElements {
    static function Details() {
        return new HtmlTags\InteractiveElements\Details();
    }

    static function Dialog() {
        return new HtmlTags\InteractiveElements\Dialog();
    }

    static function Menu() {
        return new HtmlTags\InteractiveElements\Menu();
    }

    static function Summary() {
        return new HtmlTags\InteractiveElements\Summary();
    }
}