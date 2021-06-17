<?php

namespace HtmlConstructor\Tags\EmbeddedContent;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Picture extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "picture";
    }
}