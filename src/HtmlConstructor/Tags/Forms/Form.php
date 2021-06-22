<?php

namespace HtmlConstructor\Tags\Forms;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Form extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "form";
    }

    /**
     * Form constructor.
     * @param false|string $action
     * @param false|self::$METHOD_*|string $method
     */
    public function __construct($action = false, $method = false)
    {
        if($this->check($action)) {
            $this->action($action);
        }
        if($this->check($method)) {
            $this->method($method);
        }
        return $this;
    }

    static $METHOD_GET = "get";
    static $METHOD_POST = "post";
    static $METHOD_DIALOG = "dialog";

    static $TARGET_SELF = "_self";
    static $TARGET_BLANK = "_blank";
    static $TARGET_PARENT = "_parent";
    static $TARGET_TOP = "_top";

    /**
     * Set accept attribute
     * @param string $accept
     * @return $this
     */
    function accept($accept) {
        $this->arParams["attributes"]["accept"] = $accept;
        return $this;
    }


    /**
     * Set accept-charset attribute
     * @param string $acceptCharset
     * @return $this
     */
    function acceptCharset($acceptCharset) {
        $this->arParams["attributes"]["accept-charset"] = $acceptCharset;
        return $this;
    }

    /**
     * Set autocapitalize attribute
     * @param string $autocapitalize
     * @return $this
     */
    function autocapitalize($autocapitalize) {
        $this->arParams["attributes"]["autocapitalize"] = $autocapitalize;
        return $this;
    }

    /**
     * Set autocomplete attribute
     * @param string $autocomplete
     * @return $this
     */
    function autocomplete($autocomplete) {
        $this->arParams["attributes"]["autocomplete"] = $autocomplete;
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
     * Set rel attribute
     * @param string $rel
     * @return $this
     */
    function rel($rel) {
        $this->arParams["attributes"]["rel"] = $rel;
        return $this;
    }

    /**
     * Set action attribute
     * @param string $action
     * @return $this
     */
    function action($action) {
        $this->arParams["attributes"]["action"] = $action;
        return $this;
    }

    /**
     * Set enctype attribute
     * @param string $enctype
     * @return $this
     */
    function enctype($enctype) {
        $this->arParams["attributes"]["enctype"] = $enctype;
        return $this;
    }

    /**
     * Set method attribute
     * @param self::$METHOD_*|string $method
     * @return $this
     */
    function method($method) {
        $this->arParams["attributes"]["method"] = $method;
        return $this;
    }

    /**
     * Set novalidate attribute
     * @param string $novalidate
     * @return $this
     */
    function novalidate($novalidate) {
        $this->arParams["attributes"]["novalidate"] = $novalidate;
        return $this;
    }

    /**
     * Set target attribute
     * @param self::$TARGET_*|string $target
     * @return $this
     */
    function target($target) {
        $this->arParams["attributes"]["target"] = $target;
        return $this;
    }

}