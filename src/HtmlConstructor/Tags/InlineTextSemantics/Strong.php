<?php

namespace HtmlConstructor\Tags\InlineTextSemantics;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\ContainsStruct;

class Strong extends BaseTag implements Tag {
    use ContainsStruct;
    public function getName()
    {
        return "strong";
    }
}