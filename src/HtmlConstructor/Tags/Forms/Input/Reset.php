<?php

namespace HtmlConstructor\Tags\Forms\Input;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Input;

class Reset extends BaseTag implements Tag {
    use Input;
    public function getName()
    {
        return "input";
    }

    /**
     * Text constructor.
     * @param false|string $name
     * @param false|string $value
     */
    public function __construct($name = false)
    {
        $this->type("reset");
        if($this->check($name)) {
            $this->name($name);
        }
        return $this;
    }
}