<?php

namespace HtmlConstructor\Tags\ContentSectioning;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class H5 extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "h5";
    }
}
