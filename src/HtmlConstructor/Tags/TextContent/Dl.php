<?php

namespace HtmlConstructor\Tags\TextContent;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Dl extends BaseTag implements Tag {
    use Struct;
    function getName()
    {
        return "dl";
    }
}