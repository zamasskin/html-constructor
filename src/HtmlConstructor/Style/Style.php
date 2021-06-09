<?php

namespace HtmlConstructor\Style;

class Style {
    private $styles = array();

    /**
     * @param AlignContent::* $align
     * @return $this
     */
    function alignContent ($align) {
        $styles["alignContent"] = $align;
        return $this;
    }
}