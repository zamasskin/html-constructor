<?php

namespace HtmlConstructor\Tags\Forms\Input;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Input;

class Search extends BaseTag implements Tag {
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
        $this->type("search");
        if(gettype($name) === "string" && strlen($name) > 0) {
            $this->name($name);
        }
        if(gettype($value) === "string" && strlen($value) > 0) {
            $this->value($value);
        }
        return $this;
    }

    /**
     * Set dirname src
     * @param string $dirname
     * @return $this
     */
    function dirname($dirname) {
        $this->arParams["attributes"]["dirname"] = $dirname;
        return $this;
    }

    /**
     * Set maxlength src
     * @param string $maxlength
     * @return $this
     */
    function maxlength($maxlength) {
        $this->arParams["attributes"]["maxlength"] = $maxlength;
        return $this;
    }

    /**
     * Set minlength src
     * @param string $minlength
     * @return $this
     */
    function minlength($minlength) {
        $this->arParams["attributes"]["minlength"] = $minlength;
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
}