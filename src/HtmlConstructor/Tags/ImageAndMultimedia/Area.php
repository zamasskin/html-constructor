<?php

namespace HtmlConstructor\Tags\ImageAndMultimedia;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Url;

class Area extends BaseTag implements Tag {
    use Url;
    public function getName()
    {
        return "area";
    }

    /**
     * Set alt attribute
     * @param string $alt
     * @return $this
     */
    function alt($alt) {
        $this->arParams["attributes"]["alt"] = $alt;
        return $this;
    }

    /**
     * Set coords attribute
     * @param string $coords
     * @return $this
     */
    function coords($coords) {
        $this->arParams["attributes"]["coords"] = $coords;
        return $this;
    }

    /**
     * Set download attribute
     * @param string $download
     * @return $this
     */
    function download($download) {
        $this->arParams["attributes"]["download"] = $download;
        return $this;
    }

    /**
     * Set hreflang attribute
     * @param string $hreflang
     * @return $this
     */
    function hreflang($hreflang) {
        $this->arParams["attributes"]["hreflang"] = $hreflang;
        return $this;
    }

    /**
     * Set ping attribute
     * @param string $ping
     * @return $this
     */
    function ping($ping) {
        $this->arParams["attributes"]["ping"] = $ping;
        return $this;
    }

    /**
     * Set referrerpolicy attribute
     * @param string $referrerpolicy
     * @return $this
     */
    function referrerpolicy($referrerpolicy) {
        $this->arParams["attributes"]["referrerpolicy"] = $referrerpolicy;
        return $this;
    }

    /**
     * Set rel attribute
     * @param string $rel
     * @return $this
     */
    function rel($rel) {
        $this->arParams["attributes"]["rel"] = $rel;
        return $this;
    }

    /**
     * Set shape attribute
     * @param string $shape
     * @return $this
     */
    function shape($shape) {
        $this->arParams["attributes"]["shape"] = $shape;
        return $this;
    }

    /**
     * Set name attribute
     * @param string $name
     * @return $this
     */
    function _name($name) {
        $this->arParams["attributes"]["name"] = $name;
        return $this;
    }

    /**
     * Set nohref attribute
     * @param string $nohref
     * @return $this
     */
    function _nohref($nohref) {
        $this->arParams["attributes"]["nohref"] = $nohref;
        return $this;
    }

    /**
     * Set type attribute
     * @param string $type
     * @return $this
     */
    function _type($type) {
        $this->arParams["attributes"]["type"] = $type;
        return $this;
    }
}