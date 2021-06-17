<?php

namespace HtmlConstructor\Tags\EmbeddedContent;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Portal extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "portal";
    }

    /**
     * Portal constructor.
     * @param false|string $src
     */
    public function __construct($src = false)
    {
        if(gettype($src) === "string" && strlen($src) > 0) {
            $this->arParams["attributes"]["src"] = $src;
        }
        return $this;
    }

    /**
     * Set attribute src
     * @param string $src
     * @return $this
     */
    function src($src) {
        $this->arParams["attributes"]["src"] = $src;
        return $this;
    }
}