<?php

namespace HtmlConstructor\Tags\InlineTextSemantics;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;

class Wbr extends BaseTag implements Tag {
    public function getName()
    {
        return "wbr";
    }
}