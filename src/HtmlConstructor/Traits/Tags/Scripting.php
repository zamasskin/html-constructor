<?php
namespace HtmlConstructor\Traits\Tags;

use HtmlConstructor\Tags as HtmlTags;

trait Scripting {
    static function Script() {
        return new HtmlTags\Scripting\Script();
    }
}