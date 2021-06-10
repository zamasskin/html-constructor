<?php

namespace HtmlConstructor\Tags;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Size;

class Img extends BaseTag implements Tag {
    const CROSSORIGIN_ANONYMOUS = "anonymous";
    const CROSSORIGIN_USE_CREDENTIALS = "use-credentials";

    const DECODING_SYNC = "sync";
    const DECODING_ASYNC = "async";
    const DECODING_AUTO = "auto";

    const IMPORTANCE_AUTO = "auto";
    const IMPORTANCE_HIGH = "high";
    const IMPORTANCE_LOW = "low";

    const REFERRERPOLICY_NO_REFERRER = "no-referrer";
    const REFERRERPOLICY_NO_REFERRER_WHEN_DOWNGRADE = "no-referrer-when-downgrade";
    const REFERRERPOLICY_ORIGIN = "origin";
    const REFERRERPOLICY_ORIGIN_WHEN_CROSS_ORIGIN = "origin-when-cross-origin";
    const REFERRERPOLICY_UNSAFE_URL = "unsafe-url";


    const ALIGN_TOP = "top";
    const ALIGN_MIDDLE = "middle";
    const ALIGN_BOTTOM = "bottom";
    const ALIGN_LEFT = "left";
    const ALIGN_RIGHT = "right";

    use Size;
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
     * Set crossorigin attribute
     * @param self::CROSSORIGIN_*|string $crossorigin
     * @return $this
     */
    function crossorigin($crossorigin) {
        $this->arParams["attributes"]["crossorigin"] = $crossorigin;
        return $this;
    }


    /**
     * Set decoding attribute
     * @param self::DECODING_*|string $decoding
     * @return $this
     */
    function decoding($decoding) {
        $this->arParams["attributes"]["decoding"] = $decoding;
        return $this;
    }

    /**
     * Set importance attribute
     * @param self::IMPORTANCE_*|string $importance
     * @return $this
     */
    function importance($importance) {
        $this->arParams["attributes"]["importance"] = $importance;
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
     * Set referrerpolicy attribute
     * @param self::REFERRERPOLICY_*|string $referrerpolicy
     * @return $this
     */
    function referrerpolicy($referrerpolicy) {
        $this->arParams["attributes"]["intrinsicsize"] = $referrerpolicy;
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
     * @param self::ALIGN_*|string $align
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