<?php

namespace HtmlConstructor\Tags\Forms\Input;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Input;

class Email extends BaseTag implements Tag {
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
        $this->type("email");
        if(gettype($name) === "string" && strlen($name) > 0) {
            $this->name($name);
        }
        if(gettype($value) === "string" && strlen($value) > 0) {
            $this->value($value);
        }
        return $this;
    }

    /**
     * Set multiple alt
     * @param string $multiple
     * @return $this
     */
    function multiple($multiple) {
        $this->arParams["attributes"]["multiple"] = $multiple;
        return $this;
    }

    /**
     * Set placeholder attribute
     * @param string $placeholder
     * @return $this
     */
    function placeholder($placeholder) {
        $this->arParams["attributes"]["placeholder"] = $placeholder;
        return $this;
    }

    /**
     * Set size attribute
     * @param string $size
     * @return $this
     */
    function size($size) {
        $this->arParams["attributes"]["size"] = $size;
        return $this;
    }
}