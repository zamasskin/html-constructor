<?php

namespace HtmlConstructor\Tags\InlineTextSemantics;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\ContainsStruct;

class Mark extends BaseTag implements Tag {
    use ContainsStruct;
    public function getName()
    {
        return "mark";
    }
}