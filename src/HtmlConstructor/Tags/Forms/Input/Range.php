<?php

namespace HtmlConstructor\Tags\Forms\Input;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Input;
use HtmlConstructor\Traits\MinMaxForm;

class Range extends BaseTag implements Tag {
    use Input;
    use MinMaxForm;
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
        $this->type("range");
        if($this->check($name)) {
            $this->name($name);
        }
        if($this->check($value)) {
            $this->value($value);
        }
        return $this;
    }


    /**
     * Set step alt
     * @param string $step
     * @return $this
     */
    function step($step) {
        $this->arParams["attributes"]["step"] = $step;
        return $this;
    }
}