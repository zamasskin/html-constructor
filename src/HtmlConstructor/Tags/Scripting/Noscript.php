<?php

namespace HtmlConstructor\Tags\Scripting;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Noscript extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "noscript";
    }
}