<?php

namespace HtmlConstructor\Tags\Forms;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;
use HtmlConstructor\Traits\Input;
use HtmlConstructor\Traits\FormButtonAndImage;

class Button extends BaseTag implements Tag {
    use Struct;
    use Input;
    use FormButtonAndImage;
    public function getName()
    {
        return "button";
    }

    static $TYPE_SUBMIT = "submit";
    static $TYPE_RESET = "reset";
    static $TYPE_BUTTON = "button";

    /**
     * Form constructor.
     * @param false|string $name
     * @param false|string $contains
     */
    public function __construct($name = false, $contains = false)
    {
        if(gettype($name) === "string" && strlen($name) > 0) {
            $this->name($name);
        }
        if(gettype($contains) === "string" && strlen($contains) > 0) {
            $this->contains($contains);
        }
        return $this;
    }

    /**
     * Set type name
     * @param self::$TYPE_*|string $type
     * @return $this
     */
    function type($type) {
        $this->arParams["attributes"]["type"] = $type;
        return $this;
    }
}