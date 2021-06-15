<?php

namespace HtmlConstructor\Tags\InlineTextSemantics;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Rt extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "rt";
    }
}