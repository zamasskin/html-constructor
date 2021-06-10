<?php

namespace HtmlConstructor\Tags;


use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Title extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "title";
    }
}