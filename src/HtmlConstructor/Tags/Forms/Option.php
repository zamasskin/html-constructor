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
        if($this->check($value)) {
            $this->value($contains);
        }
        if($this->check($contains)) {
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