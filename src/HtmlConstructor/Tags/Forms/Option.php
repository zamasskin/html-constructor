<?php

namespace HtmlConstructor\Tags\Forms;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;
use HtmlConstructor\Traits\LabelAttribute;

class Option extends BaseTag implements Tag {
    use Struct;
    use LabelAttribute;
    public function getName()
    {
        return "option";
    }

    /**
     * Legend constructor.
     * @param false|string $value
     * @param false|string $contains
     */
    public function __construct($value = false, $contains = false)
    {
        if(gettype($value) === "string" && strlen($value) > 0) {
            $this->value($contains);
        }
        if(gettype($contains) === "string" && strlen($contains) > 0) {
            $this->contains($contains);
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

    function selected() {
        $this->arParams["attributes"]["selected"] = NULL;
        return $this;
    }
}