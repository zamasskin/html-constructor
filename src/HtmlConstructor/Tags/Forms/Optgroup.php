<?php

namespace HtmlConstructor\Tags\Forms;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;
use HtmlConstructor\Traits\Disabled;

class Optgroup extends BaseTag implements Tag {
    use Struct;
    use Disabled;
    public function getName()
    {
        return "optgroup";
    }

    /**
     * Legend constructor.
     * @param false|string $label
     */
    public function __construct($label = false)
    {
        if(gettype($label) === "string" && strlen($label) > 0) {
            $this->label($label);
        }
        return $this;
    }

    /**
     * Set label attribute
     * @param string $label
     * @return $this
     */
    function label($label) {
        $this->arParams["attributes"]["label"] = $label;
        return $this;
    }

}