<?php

namespace HtmlConstructor\Tags\Forms\Input;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Input;

class Image extends BaseTag implements Tag {
    use Input;
    public function getName()
    {
        return "input";
    }

    /**
     * Text constructor.
     * @param false|string $name
     * @param false|string $value
     */
    public function __construct($name = false, $value = false)
    {
        $this->type("image");
        if(gettype($name) === "string" && strlen($name) > 0) {
            $this->name($name);
        }
        if(gettype($value) === "string" && strlen($value) > 0) {
            $this->value($value);
        }
        return $this;
    }

    /**
     * Set attribute attribute
     * @param string $alt
     * @return $this
     */
    function alt($alt) {
        $this->arParams["attributes"]["alt"] = $alt;
        return $this;
    }

    /**
     * Set formaction attribute
     * @param string $formaction
     * @return $this
     */
    function formaction($formaction) {
        $this->arParams["attributes"]["formaction"] = $formaction;
        return $this;
    }

    /**
     * Set formenctype attribute
     * @param string $formenctype
     * @return $this
     */
    function formenctype($formenctype) {
        $this->arParams["attributes"]["formenctype"] = $formenctype;
        return $this;
    }

    /**
     * Set formmethod attribute
     * @param string $formmethod
     * @return $this
     */
    function formmethod($formmethod) {
        $this->arParams["attributes"]["formmethod"] = $formmethod;
        return $this;
    }

    /**
     * Set formnovalidate attribute
     * @param string $formnovalidate
     * @return $this
     */
    function formnovalidate($formnovalidate) {
        $this->arParams["attributes"]["formnovalidate"] = $formnovalidate;
        return $this;
    }

    /**
     * Set formtarget attribute
     * @param string $formtarget
     * @return $this
     */
    function formtarget($formtarget) {
        $this->arParams["attributes"]["formtarget"] = $formtarget;
        return $this;
    }

    /**
     * Set width attribute
     * @param string $width
     * @return $this
     */
    function width($width) {
        $this->arParams["attributes"]["width"] = $width;
        return $this;
    }

    /**
     * Set height attribute
     * @param string $height
     * @return $this
     */
    function height($height) {
        $this->arParams["attributes"]["height"] = $height;
        return $this;
    }

    /**
     * Set src attribute
     * @param string $src
     * @return $this
     */
    function src($src) {
        $this->arParams["attributes"]["src"] = $src;
        return $this;
    }
}