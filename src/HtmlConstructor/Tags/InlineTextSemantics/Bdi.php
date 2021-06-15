<?php

namespace HtmlConstructor\Tags\InlineTextSemantics;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\ContainsStruct;

class Bdi extends BaseTag implements Tag {
    use ContainsStruct;
    public function getName()
    {
        return "bdi";
    }
}