<?php

namespace HtmlConstructor\Tags\TextContent;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Ul extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "ul";
    }

    static $TYPE_CIRCLE = "circle";
    static $TYPE_DISC = "disc";
    static $TYPE_SQUARE = "square";
    static $TYPE_TRIANGLE = "triangle";

    /**
     * Set compact attribute
     * @param boolean $compact
     * @return $this
     */
    function compact($compact) {
        $compact = (gettype($compact) == "boolean" && $compact) || $compact == "true" || intval($compact) == 1;
        $this->arParams["attributes"]["compact"] = $compact == true ? "true" : "false";
        return $this;
    }

    /**
     * Set type attribute
     * @param self::$TYPE_*|string $type
     * @return $this
     */
    function type($type) {
        $this->arParams["attributes"]["type"] = $type;
        return $this;
    }
}