<?php

namespace HtmlConstructor\Tags\InlineTextSemantics;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Data extends BaseTag implements Tag {
    use Struct;


    public function getName()
    {
        return "data";
    }

    public function __construct($value = false, $contains = false)
    {
        if($this->check($value)) {
            $this->arParams["attributes"]["value"] = $value;
        }
        if($this->check($contains)) {
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
}