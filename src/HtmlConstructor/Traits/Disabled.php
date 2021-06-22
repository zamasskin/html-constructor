<?php

namespace HtmlConstructor\Traits;

trait Disabled {
    /**
     * Set disabled attribute
     * @return $this
     */
    function disabled() {
        $this->arParams["attributes"]["disabled"] = NULL;
        return $this;
    }
}