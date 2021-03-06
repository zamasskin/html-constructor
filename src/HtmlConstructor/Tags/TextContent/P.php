<?php

namespace HtmlConstructor\Tags\TextContent;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class P extends BaseTag implements Tag {
    use Struct;
    function getName()
    {
        return "p";
    }

    /**
     * P constructor.
     * @param false|string $contains
     */
    function __construct($contains = false)
    {
        if($this->check($contains)) {
            $this->arParams["contains"] = $contains;
        }
        return $this;
    }
}