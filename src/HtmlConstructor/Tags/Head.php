<?php

namespace HtmlConstructor\Tags;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Head extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "head";
    }

    /**
     * Set profile attribute
     * @param $profile
     * @return $this
     */
    function _profile($profile) {
        $this->arParams["attributes"]["profile"] = $profile;
        return $this;
    }
}