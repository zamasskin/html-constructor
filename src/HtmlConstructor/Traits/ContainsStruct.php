<?php

namespace HtmlConstructor\Traits;

trait ContainsStruct {
    use Struct;
    public function __construct($contains = false)
    {
        if(gettype($contains) === "string" && strlen($contains) > 0) {
            $this->arParams["contains"] = $contains;
        }
        return $this;
    }
}