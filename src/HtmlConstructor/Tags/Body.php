<?php

namespace HtmlConstructor\Tags;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Body extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "body";
    }
}