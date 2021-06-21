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
}