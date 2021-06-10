<?php

namespace HtmlConstructor\Tags\Metadata;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Url;

class Base extends BaseTag implements Tag {
    use Url;
    public function getName()
    {
        return "base";
    }
}