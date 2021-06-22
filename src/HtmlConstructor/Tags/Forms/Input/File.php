<?php

namespace HtmlConstructor\Tags\Forms\Input;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Input;
use HtmlConstructor\Traits\MultipleAttribute;

class File extends BaseTag implements Tag {
    use Input;
    use MultipleAttribute;
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
        $this->type("file");
        if(gettype($name) === "string" && strlen($name) > 0) {
            $this->name($name);
        }
        if(gettype($value) === "string" && strlen($value) > 0) {
            $this->value($value);
        }
        return $this;
    }

    /**
     * Set accept attribute
     * @param string $accept
     * @return $this
     */
    function accept($accept) {
        $this->arParams["attributes"]["accept"] = $accept;
        return $this;
    }

    /**
     * Set capture alt
     * @param string $capture
     * @return $this
     */
    function capture($capture) {
        $this->arParams["attributes"]["capture"] = $capture;
        return $this;
    }
}