<?php

namespace HtmlConstructor\Tags\EmbeddedContent;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Size;
use HtmlConstructor\Traits\Struct;

class Iframe extends BaseTag implements Tag {
    use Size;
    use Struct;
    public function getName()
    {
        return "iframe";
    }

    /**
     * Iframe constructor.
     * @param false|string $src
     */
    public function __construct($src = false)
    {
        if($this->check($src)) {
            $this->arParams["attributes"]["src"] = $src;
        }
        return $this;
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
     * Set attribute title
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
     * Set allow attribute
     * @param string $allow
     * @return $this
     */
    function allow($allow) {
        $this->arParams["attributes"]["allow"] = $allow;
        return $this;
    }


    /**
     * Set allowfullscreen attribute
     * @param string $allowfullscreen
     * @return $this
     */
    function allowfullscreen($allowfullscreen) {
        $this->arParams["attributes"]["allowfullscreen"] = $allowfullscreen;
        return $this;
    }

    /**
     * Set allowpaymentrequest attribute
     * @param string $allowpaymentrequest
     * @return $this
     */
    function allowpaymentrequest($allowpaymentrequest) {
        $this->arParams["attributes"]["allowpaymentrequest"] = $allowpaymentrequest;
        return $this;
    }

    /**
     * Set csp attribute
     * @param string $csp
     * @return $this
     */
    function csp($csp) {
        $this->arParams["attributes"]["csp"] = $csp;
        return $this;
    }

    /**
     * Set loading attribute
     * @param string $loading
     * @return $this
     */
    function loading($loading) {
        $this->arParams["attributes"]["loading"] = $loading;
        return $this;
    }

    /**
     * Set name attribute
     * @param string $name
     * @return $this
     */
    function name($name) {
        $this->arParams["attributes"]["name"] = $name;
        return $this;
    }

    /**
     * Set srcdoc attribute
     * @param string $srcdoc
     * @return $this
     */
    function srcdoc($srcdoc) {
        $this->arParams["attributes"]["srcdoc"] = $srcdoc;
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
     * Set sandbox attribute
     * @param string $sandbox
     * @return $this
     */
    function sandbox($sandbox) {
        $this->arParams["attributes"]["sandbox"] = $sandbox;
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
     * Set frameborder attribute
     * @param string $frameborder
     * @return $this
     */
    function _frameborder($frameborder) {
        $this->arParams["attributes"]["frameborder"] = $frameborder;
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
     * Set marginheight attribute
     * @param string $marginheight
     * @return $this
     */
    function _marginheight($marginheight) {
        $this->arParams["attributes"]["marginheight"] = $marginheight;
        return $this;
    }

    /**
     * Set marginwidth attribute
     * @param string $marginwidth
     * @return $this
     */
    function _marginwidth($marginwidth) {
        $this->arParams["attributes"]["marginwidth"] = $marginwidth;
        return $this;
    }

    /**
     * Set scrolling attribute
     * @param string $scrolling
     * @return $this
     */
    function _scrolling($scrolling) {
        $this->arParams["attributes"]["scrolling"] = $scrolling;
        return $this;
    }
}