<?php

namespace HtmlConstructor\Tags\TableContent;

use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Th extends Td implements Tag {
    use Struct;
    public function getName()
    {
        return "th";
    }

    /**
     * Set colspan attribute
     * @param string $colspan
     * @return $this
     */
    function colspan($colspan) {
        $this->arParams["attributes"]["colspan"] = $colspan;
        return $this;
    }

    /**
     * Set rowspan attribute
     * @param string $rowspan
     * @return $this
     */
    function rowspan($rowspan) {
        $this->arParams["attributes"]["rowspan"] = $rowspan;
        return $this;
    }

    /**
     * Set headers attribute
     * @param string $headers
     * @return $this
     */
    function headers($headers) {
        $this->arParams["attributes"]["headers"] = $headers;
        return $this;
    }

    /**
     * Set abbr attribute
     * @param string $abbr
     * @return $this
     */
    function abbr($abbr) {
        $this->arParams["attributes"]["abbr"] = $abbr;
        return $this;
    }

    /**
     * Set scope attribute
     * @param string $scope
     * @return $this
     */
    function scope($scope) {
        $this->arParams["attributes"]["scope"] = $scope;
        return $this;
    }

    /**
     * Set axis attribute
     * @param string $axis
     * @return $this
     */
    function _axis($axis) {
        $this->arParams["attributes"]["axis"] = $axis;
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
     * Set height attribute
     * @param string $height
     * @return $this
     */
    function _height($height) {
        $this->arParams["attributes"]["height"] = $height;
        return $this;
    }
}