<?php

namespace HtmlConstructor\Tags;


use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;

class Meta extends BaseTag implements Tag {
    public function getName()
    {
        return "meta";
    }
}