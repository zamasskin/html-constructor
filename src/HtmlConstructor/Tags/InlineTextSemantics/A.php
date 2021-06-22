<?php

namespace HtmlConstructor\Tags\InlineTextSemantics;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;
use HtmlConstructor\Traits\Url;

class A extends BaseTag implements Tag {
    use Struct;
    use Url;
    public function getName()
    {
        return "a";
    }

    /**
     * A constructor.
     * @param false|string $href
     * @param false|string $contains
     */
    function __construct($href = false, $contains = false)
    {
        if($this->check($href)) {
            $this->arParams["attributes"]["href"] = $href;
        }

        if($this->check($contains)) {
            $this->arParams["contains"] = $contains;
        }

        return $this;
    }

    /**
     *  Set download attribute
     * @param $download
     * @return $this
     */
    function download($download) {
        $this->arParams["attributes"]["download"] = $download;
        return $this;
    }


    /**
     *  Set hreflang attribute
     * @param $hreflang
     * @return $this
     */
    function hreflang($hreflang) {
        $this->arParams["attributes"]["hreflang"] = $hreflang;
        return $this;
    }

    /**
     *  Set ping attribute
     * @param $ping
     * @return $this
     */
    function ping($ping) {
        $this->arParams["attributes"]["ping"] = $ping;
        return $this;
    }

    /**
     *  Set referrerpolicy attribute
     * @param $referrerpolicy
     * @return $this
     */
    function referrerpolicy($referrerpolicy) {
        $this->arParams["attributes"]["referrerpolicy"] = $referrerpolicy;
        return $this;
    }

    /**
     *  Set rel attribute
     * @param $ping
     * @return $this
     */
    function rel($rel) {
        $this->arParams["attributes"]["rel"] = $rel;
        return $this;
    }

    /**
     *  Set type attribute
     * @param $type
     * @return $this
     */
    function type($type) {
        $this->arParams["attributes"]["ping"] = $type;
        return $this;
    }



    /**
     *  Set charset attribute
     * @param $charset
     * @return $this
     */
    function _charset($charset) {
        $this->arParams["attributes"]["charset"] = $charset;
        return $this;
    }

    /**
     *  Set coords attribute
     * @param $coords
     * @return $this
     */
    function _coords($coords) {
        $this->arParams["attributes"]["coords"] = $coords;
        return $this;
    }

    /**
     *  Set name attribute
     * @param $name
     * @return $this
     */
    function _name($name) {
        $this->arParams["attributes"]["name"] = $name;
        return $this;
    }

    /**
     *  Set rev attribute
     * @param $rev
     * @return $this
     */
    function _rev($rev) {
        $this->arParams["attributes"]["rev"] = $rev;
        return $this;
    }

    /**
     *  Set shape attribute
     * @param $shape
     * @return $this
     */
    function _shape($shape) {
        $this->arParams["attributes"]["shape"] = $shape;
        return $this;
    }
}