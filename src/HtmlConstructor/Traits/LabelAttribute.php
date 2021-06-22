<?php

namespace HtmlConstructor\Traits;

trait LabelAttribute {
    /**
     * Set label attribute
     * @param string $label
     * @return $this
     */
    public function label($label) {
        $this->arParams["attributes"]["label"] = $label;
        return $this;
    }
}