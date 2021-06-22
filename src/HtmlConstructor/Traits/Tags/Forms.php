<?php
namespace HtmlConstructor\Traits\Tags;

use HtmlConstructor\Tags as HtmlTags;

trait Forms {
    static function Form($action = false, $method = false) {
        return new HtmlTags\Forms\Form($action, $method);
    }

    static function Button($name = false, $contains = false) {
        return new HtmlTags\Forms\Button($name, $contains);
    }


    static function Datalist() {
        return new HtmlTags\Forms\Datalist();
    }
}