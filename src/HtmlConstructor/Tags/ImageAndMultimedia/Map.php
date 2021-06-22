<?php

namespace HtmlConstructor\Tags\ImageAndMultimedia;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Map extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "map";
    }

    /**
     * Audio constructor.
     * @param false|string $name
     */
    public function __construct($name = false)
    {
        if($this->check($name)) {
            $this->arParams["attributes"]["name"] = $name;
        }
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