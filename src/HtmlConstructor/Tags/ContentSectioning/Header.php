<?php

namespace HtmlConstructor\Tags\ContentSectioning;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Header extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "header";
    }
}