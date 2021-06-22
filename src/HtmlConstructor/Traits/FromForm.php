<?php

namespace HtmlConstructor\Traits;

trait FromForm {
    /**
     * Set form attribute
     * @param string $form
     * @return $this
     */
    function form($form) {
        $this->arParams["attributes"]["form"] = $form;
        return $this;
    }
}