<?php

namespace HtmlConstructor;

class Head extends BaseTag implements Tag {
    use StructTag;
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