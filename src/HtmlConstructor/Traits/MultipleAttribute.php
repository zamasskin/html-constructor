<?php

namespace HtmlConstructor\Traits;

trait MultipleAttribute {
    /**
     * Set multiple alt
     * @return $this
     */
    function multiple() {
        $this->arParams["attributes"]["multiple"] = NULL;
        return $this;
    }
}