<?php

namespace HtmlConstructor\Tags\TextContent;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Ol extends Li implements Tag {
    use Struct;
    function getName()
    {
        return "ol";
    }

    /**
     * Set reversed attribute
     * @param boolean $reversed
     * @return $this
     */
    function reversed($reversed) {
        $reversed = (gettype($reversed) == "boolean" && $reversed) || $reversed == "true" || intval($reversed) == 1;
        $this->arParams["attributes"]["type"] = $reversed == true ? "true" : "false";
        return $this;
    }


    /**
     * Set type attribute
     * @param string $start
     * @return $this
     */
    function start($start) {
        $this->arParams["attributes"]["start"] = $start;
        return $this;
    }
}