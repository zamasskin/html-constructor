<?php

namespace HtmlConstructor\Tags\Forms\Input;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Input;

class Radio extends BaseTag implements Tag {
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
        $this->type("radio");
        if($this->check($name)) {
            $this->name($name);
        }
        if($this->check($value)) {
            $this->value($value);
        }
        return $this;
    }

    /**
     * Set checked alt
     * @return $this
     */
    function checked() {
        $this->arParams["attributes"]["checked"] = NULL;
        return $this;
    }
}