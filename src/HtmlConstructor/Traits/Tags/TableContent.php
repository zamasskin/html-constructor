<?php
namespace HtmlConstructor\Traits\Tags;

use HtmlConstructor\Tags as HtmlTags;


trait TableContent {
    static function Table() {
        return new HtmlTags\TableContent\Table();
    }

    static function Thead() {
        return new HtmlTags\TableContent\Thead();
    }

    static function Tbody() {
        return new HtmlTags\TableContent\Tbody();
    }

    static function Tfoot() {
        return new HtmlTags\TableContent\Tfoot();
    }

    static function Tr() {
        return new HtmlTags\TableContent\Tr();
    }
}