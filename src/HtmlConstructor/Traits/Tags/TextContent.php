<?php
namespace HtmlConstructor\Traits\Tags;

use HtmlConstructor\Tags as HtmlTags;

trait TextContent {
    static function Div() {
        return new HtmlTags\TextContent\Div();
    }

    static function Blockquote($cite = false) {
        return new HtmlTags\TextContent\Blockquote($cite);
    }

    static function Dd() {
        return new HtmlTags\TextContent\Dd();
    }

    static function Dl() {
        return new HtmlTags\TextContent\Dl();
    }

    static function Dt() {
        return new HtmlTags\TextContent\Dt();
    }

    static function Figcaption() {
        return new HtmlTags\TextContent\Figcaption();
    }

    static function Figure() {
        return new HtmlTags\TextContent\Figure();
    }

    static function Hr() {
        return new HtmlTags\TextContent\Hr();
    }

    static function Li($value = false, $contains = false) {
        return new HtmlTags\TextContent\Li($value, $contains);
    }

    static function Ol($value = false, $contains = false) {
        return new HtmlTags\TextContent\Ol($value, $contains);
    }

    static function P($contains = false) {
        return new HtmlTags\TextContent\P($contains);
    }

    static function Pre($contains = false) {
        return new HtmlTags\TextContent\Pre($contains);
    }

    static function Ul() {
        return new HtmlTags\TextContent\Ul();
    }
}