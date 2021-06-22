<?php

namespace HtmlConstructor\Tags\Forms;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Label extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "label";
    }

    /**
     * Set for attribute
     * @param string $for
     * @return $this
     */
    function for($for) {
        $this->arParams["attributes"]["for"] = $for;
        return $this;
    }

}