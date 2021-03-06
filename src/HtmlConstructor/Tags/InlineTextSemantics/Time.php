<?php

namespace HtmlConstructor\Tags\InlineTextSemantics;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Time extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "time";
    }

    /**
     * Time constructor.
     * @param false|string $datetime
     * @param false|string $contains
     */
    function __construct($datetime = false, $contains = false)
    {
        if($this->check($datetime)) {
            $this->arParams["attributes"]["datetime"] = $datetime;
        }
        if($this->check($contains)) {
            $this->arParams["contains"] = $contains;
        }
        return $this;
    }


    /**
     *  Set datetime attribute
     * @param string $datetime
     * @return $this
     */
    function datetime($datetime) {
        $this->arParams["attributes"]["datetime"] = $datetime;
        return $this;
    }
}