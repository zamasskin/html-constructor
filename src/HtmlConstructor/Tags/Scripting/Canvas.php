<?php

namespace HtmlConstructor\Tags\Scripting;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;
use HtmlConstructor\Traits\Size;

class Canvas extends BaseTag implements Tag {
    use Struct;
    use Size;
    public function getName()
{
        return "canvas";
    }
}