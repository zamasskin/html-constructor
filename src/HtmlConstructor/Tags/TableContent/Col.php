<?php

namespace HtmlConstructor\Tags\TableContent;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Col extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "col";
    }

    /**
     * Set span attribute
     * @param string $span
     * @return $this
     */
    function span($span) {
        $this->arParams["attributes"]["span"] = $span;
        return $this;
    }

    /**
     * Set align attribute
     * @param string $align
     * @return $this
     */
    function _align($align) {
        $this->arParams["attributes"]["align"] = $align;
        return $this;
    }

    /**
     * Set bgcolor attribute
     * @param string $bgcolor
     * @return $this
     */
    function _bgcolor($bgcolor) {
        $this->arParams["attributes"]["bgcolor"] = $bgcolor;
        return $this;
    }

    /**
     * Set width attribute
     * @param string $width
     * @return $this
     */
    function _width($width) {
        $this->arParams["attributes"]["width"] = $width;
        return $this;
    }

    /**
     * Set char attribute
     * @param string $char
     * @return $this
     */
    function _char($char) {
        $this->arParams["attributes"]["char"] = $char;
        return $this;
    }

    /**
     * Set valign attribute
     * @param string $valign
     * @return $this
     */
    function _valign($valign) {
        $this->arParams["attributes"]["valign"] = $valign;
        return $this;
    }

    /**
     * Set charoff attribute
     * @param string $charoff
     * @return $this
     */
    function _charoff($charoff) {
        $this->arParams["attributes"]["charoff"] = $charoff;
        return $this;
    }

}