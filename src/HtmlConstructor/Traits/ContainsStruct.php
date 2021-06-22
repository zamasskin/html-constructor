<?php

namespace HtmlConstructor\Traits;

trait ContainsStruct {
    use Struct;
    public function __construct($contains = false)
    {
        if($this->check($contains)) {
            $this->arParams["contains"] = $contains;
        }
        return $this;
    }
}