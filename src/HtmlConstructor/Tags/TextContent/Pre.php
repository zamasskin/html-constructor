<?php

namespace HtmlConstructor\Tags\TextContent;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Pre extends BaseTag implements Tag {
    use Struct;
    function getName()
    {
        return "pre";
    }

    /**
     * Pre constructor.
     * @param false|string $contains
     */
    function __construct($contains = false)
    {
        if(gettype($contains) === "string" && strlen($contains) > 0) {
            $this->arParams["contains"] = $contains;
        }
        return $this;
    }

    /**
     * Set cols attribute
     * @param string $cols
     * @return $this
     */
    function cols($cols) {
        $this->arParams["attributes"]["cols"] = $cols;
        return $this;
    }

    /**
     * Set width attribute
     * @param string $width
     * @return $this
     */
    function width($width) {
        $this->arParams["attributes"]["width"] = $width;
        return $this;
    }

    /**
     * Set wrap attribute
     * @param string $wrap
     * @return $this
     */
    function wrap($wrap) {
        $this->arParams["attributes"]["wrap"] = $wrap;
        return $this;
    }
}