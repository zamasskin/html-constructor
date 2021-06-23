<?php

namespace HtmlConstructor\Tags\InteractiveElements;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Summary extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "summary";
    }
}