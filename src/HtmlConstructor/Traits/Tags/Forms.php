<?php
namespace HtmlConstructor\Traits\Tags;

use HtmlConstructor\Tags as HtmlTags;

trait Forms {
    static function Form($action = false, $method = false) {
        return new HtmlTags\Forms\Form($action, $method);
    }
}