<?php

namespace HtmlConstructor\Tags\Forms\Input;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Input;

class Time extends BaseTag implements Tag {
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
    public function __construct($name = false, $value = false)
    {
        $this->type("time");
        if($this->check($name)) {
            $this->name($name);
        }
        if($this->check($value)) {
            $this->value($value);
        }
        return $this;
    }
}