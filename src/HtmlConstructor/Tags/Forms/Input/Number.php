<?php

namespace HtmlConstructor\Tags\Forms\Input;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Input;

class Number extends BaseTag implements Tag {
    use Input;
    public function getName()
    {
        return "input";
    }

    /**
     * Text constructor.
     * @param false|string $name
     * @param false|string $value
     */
    public function __construct($name = false, $value = false)
    {
        $this->type("number");
        if(gettype($name) === "string" && strlen($name) > 0) {
            $this->name($name);
        }
        if(gettype($value) === "string" && strlen($value) > 0) {
            $this->value($value);
        }
        return $this;
    }

    /**
     * Set max alt
     * @param string $max
     * @return $this
     */
    function max($max) {
        $this->arParams["attributes"]["max"] = $max;
        return $this;
    }

    /**
     * Set min alt
     * @param string $min
     * @return $this
     */
    function min($min) {
        $this->arParams["attributes"]["min"] = $min;
        return $this;
    }

    /**
     * Set step alt
     * @param string $step
     * @return $this
     */
    function step($step) {
        $this->arParams["attributes"]["step"] = $step;
        return $this;
    }
}