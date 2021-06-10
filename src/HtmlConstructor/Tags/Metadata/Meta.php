<?php

namespace HtmlConstructor\Tags\Metadata;


use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;

class Meta extends BaseTag implements Tag {
    public function getName()
    {
        return "meta";
    }
}