<?php

namespace HtmlConstructor\Tags;


use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Download;

class Link extends BaseTag implements Tag {
    use Download;

    /**
     * Link constructor.
     * @param false|string $href
     * @param false|string $rel
     * @return $this
     */
    function __construct($href=false, $rel=false)
    {
        if(gettype($href) === "string" && strlen($href) > 0) {
            $this->arParams["attributes"]["href"] = $href;
        }

        if(gettype($rel) === "string" && strlen($rel) > 0) {
            $this->arParams["attributes"]["rel"] = $rel;
        }
        return $this;
    }

    public function getName()
    {
        return "link";
    }

    /**
     * Set href attribute
     * @param string $href
     * @return $this
     */
    function href($href) {
        $this->arParams["attributes"]["href"] = $href;
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
     * Set as attribute
     * @param string $as
     * @return $this
     */
    function as($as) {
        $this->arParams["attributes"]["as"] = $as;
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
     * Set integrity attribute
     * @param string $integrity
     * @return $this
     */
    function integrity($integrity) {
        $this->arParams["attributes"]["integrity"] = $integrity;
        return $this;
    }

    /**
     * Set media attribute
     * @param string $media
     * @return $this
     */
    function media($media) {
        $this->arParams["attributes"]["media"] = $media;
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
     * Set title attribute
     * @param string $title
     * @return $this
     */
    function title($title) {
        $this->arParams["attributes"]["title"] = $title;
        return $this;
    }

    /**
     * Set type attribute
     * @param string $type
     * @return $this
     */
    function type($type) {
        $this->arParams["attributes"]["type"] = $type;
        return $this;
    }

    /**
     * Set disabled attribute
     * @param string $disabled
     * @return $this
     */
    function disabled($disabled) {
        $this->arParams["attributes"]["disabled"] = $disabled;
        return $this;
    }

    /**
     * Set methods attribute
     * @param string $methods
     * @return $this
     */
    function methods($methods) {
        $this->arParams["attributes"]["methods"] = $methods;
        return $this;
    }

    /**
     * Set prefetch attribute
     * @param string $prefetch
     * @return $this
     */
    function prefetch($prefetch) {
        $this->arParams["attributes"]["prefetch"] = $prefetch;
        return $this;
    }

    /**
     * Set target attribute
     * @param string $target
     * @return $this
     */
    function target($target) {
        $this->arParams["attributes"]["target"] = $target;
        return $this;
    }


    /**
     * Set charset attribute
     * @param string $charset
     * @return $this
     */
    function _charset($charset) {
        $this->arParams["attributes"]["charset"] = $charset;
        return $this;
    }


    /**
     * Set rev attribute
     * @param string $rev
     * @return $this
     */
    function _rev($rev) {
        $this->arParams["attributes"]["rev"] = $rev;
        return $this;
    }
}