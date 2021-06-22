<?php

namespace HtmlConstructor\Tags\Forms;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Progress extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "progress";
    }

    /**
     * Legend constructor.
     * @param false|int|float $value
     * @param false|int|float $max
     */
    public function __construct($value = false, $max = false)
    {
        if($value !== false && $value !== NULL) {
            $this->value($value);
        }
        if($max !== false && $max !== NULL) {
            $this->max($max);
        }
        return $this;
    }

    /**
     * Set max alt
     * @param int|float $max
     * @return $this
     */
    function max($max) {
        $this->arParams["attributes"]["max"] = $max;
        return $this;
    }

    /**
     * Set value attribute
     * @param int|float $value
     * @return $this
     */
    function value($value) {
        $this->arParams["attributes"]["value"] = $value;
        return $this;
    }
}