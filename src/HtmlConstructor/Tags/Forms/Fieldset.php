<?php

namespace HtmlConstructor\Tags\Forms;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;
use HtmlConstructor\Traits\FromForm;

class Fieldset extends BaseTag implements Tag {
    use Struct;
    use FromForm;
    public function getName()
    {
        return "fieldset";
    }

    /**
     * Set disabled attribute
     * @param string $disabled
     * @return $this
     */
    function disabled($disabled) {
        $this->arParams["attributes"]["disabled"] = $disabled;
        return $this;
    }

    /**
     * Set name attribute
     * @param string $name
     * @return $this
     */
    function _name($name) {
        $this->arParams["attributes"]["name"] = $name;
        return $this;
    }
}