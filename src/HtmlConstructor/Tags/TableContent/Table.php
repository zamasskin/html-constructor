<?php

namespace HtmlConstructor\Tags\TableContent;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Table extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "table";
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
     * Set border attribute
     * @param string $border
     * @return $this
     */
    function _border($border) {
        $this->arParams["attributes"]["border"] = $border;
        return $this;
    }

    /**
     * Set cellpadding attribute
     * @param string $cellpadding
     * @return $this
     */
    function _cellpadding($cellpadding) {
        $this->arParams["attributes"]["cellpadding"] = $cellpadding;
        return $this;
    }

    /**
     * Set cellspacing attribute
     * @param string $cellspacing
     * @return $this
     */
    function _cellspacing($cellspacing) {
        $this->arParams["attributes"]["cellspacing"] = $cellspacing;
        return $this;
    }

    /**
     * Set frame attribute
     * @param string $frame
     * @return $this
     */
    function _frame($frame) {
        $this->arParams["attributes"]["frame"] = $frame;
        return $this;
    }

    /**
     * Set rules attribute
     * @param string $rules
     * @return $this
     */
    function _rules($rules) {
        $this->arParams["attributes"]["rules"] = $rules;
        return $this;
    }

    /**
     * Set summary attribute
     * @param string $summary
     * @return $this
     */
    function _summary($summary) {
        $this->arParams["attributes"]["summary"] = $summary;
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
}