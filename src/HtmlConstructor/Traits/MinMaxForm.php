<?php

namespace HtmlConstructor\Traits;

trait MinMaxForm {
    /**
     * Set max alt
     * @param string $max
     * @return $this
     */
    function max($max) {
        $this->arParams["attributes"]["max"] = $max;
        return $this;
    }

    /**
     * Set min alt
     * @param string $min
     * @return $this
     */
    function min($min) {
        $this->arParams["attributes"]["min"] = $min;
        return $this;
    }
}