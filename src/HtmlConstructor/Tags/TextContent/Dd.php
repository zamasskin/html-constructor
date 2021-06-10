<?php

namespace HtmlConstructor\Tags\TextContent;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Dd extends BaseTag implements Tag {
    use Struct;
    function getName()
    {
        return "dd";
    }

    /**
     * Set nowrap attribute
     * @param bool|string $nowrap
     * @return $this
     */
    function nowrap($nowrap) {
        $nowrap = (gettype($nowrap) == "boolean" && $nowrap) || $nowrap == "yes" || intval($nowrap) == 1;
        $this->arParams["attributes"]["nowrap"] = $nowrap ? "yes" : "no";
        return $this;
    }
}