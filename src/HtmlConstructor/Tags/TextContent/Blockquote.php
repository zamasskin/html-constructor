<?php

namespace HtmlConstructor\Tags\TextContent;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Blockquote extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "blockquote";
    }

    /**
     * BlockQuote constructor.
     * @param false|string $cite
     */
    public function __construct($cite = false)
    {
        if($this->check($cite)) {
            $this->arParams["attributes"]["cite"] = $cite;
        }
    }

    /**
     * Set cite attribute
     * @param string $cite
     * @return $this
     */
    public function cite($cite) {
        $this->arParams["attributes"]["cite"] = $cite;
        return $this;
    }
}