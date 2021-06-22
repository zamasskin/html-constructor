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

    static function Fieldset() {
        return new HtmlTags\Forms\Fieldset();
    }

    static function Label() {
        return new HtmlTags\Forms\Label();
    }

    static function Legend($contains = false) {
        return new HtmlTags\Forms\Legend($contains);
    }

    static function Meter($value = false) {
        return new HtmlTags\Forms\Meter($value);
    }

    static function Optgroup($label = false) {
        return new HtmlTags\Forms\Optgroup($label);
    }

    static function Option($value = false, $contains = false) {
        return new HtmlTags\Forms\Option($value, $contains);
    }

    static function Output($name = false, $contains = false) {
        return new HtmlTags\Forms\Output($name, $contains);
    }
}