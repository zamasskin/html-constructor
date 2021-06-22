<?php

namespace HtmlConstructor\Tags\Forms;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Legend extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "legend";
    }

    /**
     * Legend constructor.
     * @param false|string $contains
     */
    public function __construct($contains = false)
    {
        if(gettype($contains) === "string" && strlen($contains) > 0) {
            $this->contains($contains);
        }
        return $this;
    }
}