<?php

namespace HtmlConstructor\Tags\InteractiveElements;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Dialog extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "dialog";
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