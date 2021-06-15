<?php

namespace HtmlConstructor\Tags\InlineTextSemantics;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\ContainsStruct;

class VarTag extends BaseTag implements Tag {
    use ContainsStruct;
    public function getName()
    {
        return "var";
    }
}