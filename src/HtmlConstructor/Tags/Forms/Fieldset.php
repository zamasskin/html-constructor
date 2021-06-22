<?php

namespace HtmlConstructor\Tags\Forms;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;
use HtmlConstructor\Traits\FromForm;
use HtmlConstructor\Traits\Disabled;

class Fieldset extends BaseTag implements Tag {
    use Struct;
    use FromForm;
    use Disabled;
    public function getName()
    {
        return "fieldset";
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