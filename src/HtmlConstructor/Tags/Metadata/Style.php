<?php

namespace HtmlConstructor\Tags\Metadata;


use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Style extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "style";
    }
}