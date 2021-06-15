<?php

namespace HtmlConstructor\Tags\InlineTextSemantics;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Br extends BaseTag implements Tag {
    public function getName()
    {
        return "br";
    }

    public function _clear($clear) {
        $this->arParams["attributes"]["clear"] = $clear;
        return $this;
    }
}