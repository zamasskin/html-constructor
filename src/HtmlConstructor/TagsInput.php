<?php

namespace HtmlConstructor;
use HtmlConstructor\Tags as HtmlTags;

class TagsInput {
    static function Button($name = false, $value = false) {
        return new HtmlTags\Forms\Input\Button($name, $value);
    }

    static function Checkbox($name = false, $value = false) {
        return new HtmlTags\Forms\Input\Checkbox($name, $value);
    }

    static function Color($name = false, $value = false) {
        return new HtmlTags\Forms\Input\Color($name, $value);
    }

    static function Date($name = false, $value = false) {
        return new HtmlTags\Forms\Input\Date($name, $value);
    }

    static function Datetime($name = false, $value = false) {
        return new HtmlTags\Forms\Input\Datetime($name, $value);
    }

    static function DatetimeLocal($name = false, $value = false) {
        return new HtmlTags\Forms\Input\DatetimeLocal($name, $value);
    }

    static function Email($name = false, $value = false) {
        return new HtmlTags\Forms\Input\Email($name, $value);
    }

    static function File($name = false, $value = false) {
        return new HtmlTags\Forms\Input\File($name, $value);
    }

    static function Hidden($name = false, $value = false) {
        return new HtmlTags\Forms\Input\Hidden($name, $value);
    }

    static function Image($name = false, $value = false) {
        return new HtmlTags\Forms\Input\Image($name, $value);
    }

    static function Month($name = false, $value = false) {
        return new HtmlTags\Forms\Input\Month($name, $value);
    }

    static function Number($name = false, $value = false) {
        return new HtmlTags\Forms\Input\Number($name, $value);
    }

    static function Password($name = false, $value = false) {
        return new HtmlTags\Forms\Input\Password($name, $value);
    }

    static function Radio($name = false, $value = false) {
        return new HtmlTags\Forms\Input\Radio($name, $value);
    }

    static function Range($name = false, $value = false) {
        return new HtmlTags\Forms\Input\Range($name, $value);
    }

    static function Reset($name = false) {
        return new HtmlTags\Forms\Input\Reset($name);
    }

    static function Search($name = false, $value = false) {
        return new HtmlTags\Forms\Input\Search($name, $value);
    }

    static function Submit($name = false, $value = false) {
        return new HtmlTags\Forms\Input\Submit($name, $value);
    }

    static function Tel($name = false, $value = false) {
        return new HtmlTags\Forms\Input\Tel($name, $value);
    }

    static function Text($name = false, $value = false) {
        return new HtmlTags\Forms\Input\Text($name, $value);
    }

    static function Time($name = false, $value = false) {
        return new HtmlTags\Forms\Input\Time($name, $value);
    }

    static function Url($name = false, $value = false) {
        return new HtmlTags\Forms\Input\Url($name, $value);
    }

    static function Week($name = false, $value = false) {
        return new HtmlTags\Forms\Input\Week($name, $value);
    }
}