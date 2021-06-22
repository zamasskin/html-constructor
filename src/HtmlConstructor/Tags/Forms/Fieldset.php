<?php

namespace HtmlConstructor\Tags\Forms;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Fieldset extends BaseTag implements Tag {
    use Struct;
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

    /**
     * Set form attribute
     * @param string $form
     * @return $this
     */
    function form($form) {
        $this->arParams["attributes"]["form"] = $form;
        return $this;
    }
}