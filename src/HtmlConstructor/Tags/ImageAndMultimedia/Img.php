<?php

namespace HtmlConstructor\Tags\ImageAndMultimedia;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Size;
use HtmlConstructor\Traits\Download;

class Img extends BaseTag implements Tag {

    static $DECODING_SYNC = "sync";
    static $DECODING_ASYNC = "async";
    static $DECODING_AUTO = "auto";


    static $ALIGN_TOP = "top";
    static $ALIGN_MIDDLE = "middle";
    static $ALIGN_BOTTOM = "bottom";
    static $ALIGN_LEFT = "left";
    static $ALIGN_RIGHT = "right";

    use Size;
    use Download;
    /**
     * Img constructor.
     * @param false|string $src
     * @param false|string $alt
     */
    function __construct($src = false, $alt = false)
    {
        if(gettype($src) === "string" && strlen($src) > 0) {
            $this->arParams["attributes"]["src"] = $src;
        }

        if(gettype($alt) === "string" && strlen($alt) > 0) {
            $this->arParams["attributes"]["alt"] = $alt;
        }

        return $this;
    }

    public function getName()
    {
        return "img";
    }

    /**
     * Set attribute src
     * @param string $src
     * @return $this
     */
    function src($src) {
        $this->arParams["attributes"]["src"] = $src;
        return $this;
    }

    /**
     * Set attribute alt
     * @param string $alt
     * @return $this
     */
    function alt($alt) {
        $this->arParams["attributes"]["alt"] = $alt;
        return $this;
    }


    /**
     * Set decoding attribute
     * @param self::$DECODING_*|string $decoding
     * @return $this
     */
    function decoding($decoding) {
        $this->arParams["attributes"]["decoding"] = $decoding;
        return $this;
    }


    /**
     * Set intrinsicsize attribute
     * @param string $intrinsicsize
     * @return $this
     */
    function intrinsicsize($intrinsicsize) {
        $this->arParams["attributes"]["intrinsicsize"] = $intrinsicsize;
        return $this;
    }

    /**
     * Set ismap attribute
     * @param bool $ismap
     * @return $this
     */
    function ismap(bool $ismap) {
        $ismap = (gettype($ismap) == "boolean" && $ismap) || $ismap == "true" || intval($ismap) == 1;
        $this->arParams["attributes"]["ismap"] = $ismap ? "true" : "false";
        return $this;
    }

    /**
     * Set sizes attribute
     * @param string $sizes
     * @return $this
     */
    function sizes($sizes) {
        $this->arParams["attributes"]["sizes"] = $sizes;
        return $this;
    }

    /**
     * Set srcset attribute
     * @param string $srcset
     * @return $this
     */
    function srcset($srcset) {
        $this->arParams["attributes"]["srcset"] = $srcset;
        return $this;
    }


    /**
     * Set usemap attribute
     * @param string $usemap
     * @return $this
     */
    function usemap($usemap) {
        $this->arParams["attributes"]["usemap"] = $usemap;
        return $this;
    }


    /**
     * Set align attribute
     * @param self::$ALIGN_*|string $align
     * @return $this
     */
    function _align($align) {
        $this->arParams["attributes"]["align"] = $align;
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
     * Set hspace attribute
     * @param string $hspace
     * @return $this
     */
    function _hspace($hspace) {
        $this->arParams["attributes"]["hspace"] = $hspace;
        return $this;
    }

    /**
     * Set longdesc attribute
     * @param string $longdesc
     * @return $this
     */
    function _longdesc($longdesc) {
        $this->arParams["attributes"]["longdesc"] = $longdesc;
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
     * Set vspace attribute
     * @param string $vspace
     * @return $this
     */
    function _vspace($vspace) {
        $this->arParams["attributes"]["vspace"] = $vspace;
        return $this;
    }

}