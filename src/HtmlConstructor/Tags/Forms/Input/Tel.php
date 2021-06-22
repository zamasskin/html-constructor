<?php

namespace HtmlConstructor\Tags\Forms\Input;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Input;

class Tel extends BaseTag implements Tag {
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
        $this->type("tel");
        if($this->check($name)) {
            $this->name($name);
        }
        if($this->check($value)) {
            $this->value($value);
        }
        return $this;
    }

    /**
     * Set maxlength attribute
     * @param string $maxlength
     * @return $this
     */
    function maxlength($maxlength) {
        $this->arParams["attributes"]["maxlength"] = $maxlength;
        return $this;
    }

    /**
     * Set minlength attribute
     * @param string $minlength
     * @return $this
     */
    function minlength($minlength) {
        $this->arParams["attributes"]["minlength"] = $minlength;
        return $this;
    }

    /**
     * Set pattern attribute
     * @param string $pattern
     * @return $this
     */
    function pattern($pattern) {
        $this->arParams["attributes"]["pattern"] = $pattern;
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