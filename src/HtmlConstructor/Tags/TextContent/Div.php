<?php

namespace HtmlConstructor\Tags\TextContent;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Div extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "div";
    }
}