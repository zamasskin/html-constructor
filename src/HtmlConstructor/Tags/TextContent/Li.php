<?php

namespace HtmlConstructor\Tags\TextContent;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Li extends BaseTag implements Tag {
    use Struct;
    function getName()
    {
        return "li";
    }

    /**
     * Li constructor.
     * @param false|string $value
     * @param false|string $contains
     */
    function __construct($value = false, $contains = false)
    {
        if(gettype($value) === "string" && strlen($value) > 0) {
            $this->arParams["attributes"]["value"] = $value;
        }

        if(gettype($contains) === "string" && strlen($contains) > 0) {
            $this->arParams["contains"] = $contains;
        }

        return $this;
    }

    /**
     * Set value attribute
     * @param string $value
     * @return $this
     */
    function value($value) {
        $this->arParams["attributes"]["value"] = $value;
        return $this;
    }

    /**
     * Set type attribute
     * @param string $type
     * @return $this
     */
    function type($type) {
        $this->arParams["attributes"]["type"] = $type;
        return $this;
    }
}