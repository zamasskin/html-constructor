<?php

namespace HtmlConstructor\Tags\InteractiveElements;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Details extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "details";
    }

    /**
     * Ser open attribute
     * @return $this
     */
    function open() {
        $this->arParams["attributes"]["open"] = NULL;
        return $this;
    }
}