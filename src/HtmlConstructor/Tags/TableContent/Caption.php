<?php

namespace HtmlConstructor\Tags\TableContent;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Caption extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "caption";
    }

    /**
     * Set align attribute
     * @param string $align
     * @return $this
     */
    function align($align) {
        $this->arParams["attributes"]["align"] = $align;
        return $this;
    }

}