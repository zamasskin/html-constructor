<?php

namespace HtmlConstructor\Tags\Forms;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;
use HtmlConstructor\Traits\ForInput;
use HtmlConstructor\Traits\MultipleAttribute;

class Select extends BaseTag implements Tag {
    use Struct;
    use ForInput;
    use MultipleAttribute;
    public function getName()
    {
        return "select";
    }

    /**
     * Select constructor.
     * @param false|string $name
     * @param false|string $value
     */
    public function __construct($name = false, $value = false)
    {
        if($this->check($name)) {
            $this->name($name);
        }
        if($this->check($value)) {
            $this->value($value);
        }
        return $this;
    }

    /**
     * Set attribute size
     * @param string $size
     * @return $this
     */
    function size($size) {
        $this->arParams["attributes"]["size"] = $size;
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