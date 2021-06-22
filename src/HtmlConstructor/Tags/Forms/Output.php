<?php

namespace HtmlConstructor\Tags\Forms;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;
use HtmlConstructor\Traits\FromForm;

class Output extends BaseTag implements Tag {
    use Struct;
    use FromForm;
    public function getName()
    {
        return "output";
    }

    /**
     * Output constructor.
     * @param false|string $name
     * @param false|string $contains
     */
    public function __construct($name = false, $contains = false)
    {
        if($this->check($name)) {
            $this->name($name);
        }
        if($this->check($contains)) {
            $this->contains($contains);
        }
        return $this;
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

    /**
     * Set attribute name
     * @param string $name
     * @return $this
     */
    function name($name) {
        $this->arParams["attributes"]["name"] = $name;
        return $this;
    }

}