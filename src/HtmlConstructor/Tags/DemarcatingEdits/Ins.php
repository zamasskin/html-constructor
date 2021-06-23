<?php

namespace HtmlConstructor\Tags\DemarcatingEdits;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Ins extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "ins";
    }

    /**
     * Set cite attribute
     * @param string $cite
     * @return $this
     */
    public function cite($cite) {
        $this->arParams["attributes"]["cite"] = $cite;
        return $this;
    }

    /**
     *  Set datetime attribute
     * @param string $datetime
     * @return $this
     */
    function datetime($datetime) {
        $this->arParams["attributes"]["datetime"] = $datetime;
        return $this;
    }
}