<?php
namespace HtmlConstructor\Traits\Tags;

use HtmlConstructor\Tags as HtmlTags;

trait DemarcatingEdits {
    static function Del() {
        return new HtmlTags\DemarcatingEdits\Del();
    }

    static function Ins() {
        return new HtmlTags\DemarcatingEdits\Ins();
    }
}