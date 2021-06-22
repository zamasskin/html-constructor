<?php

namespace HtmlConstructor\Tags\EmbeddedContent;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;

class Param extends BaseTag implements Tag {
    public function getName()
    {
        return "param";
    }

    /**
     * Iframe constructor.
     * @param false|string $name
     * @param false|string $value
     */
    public function __construct($name = false, $value = false)
    {
        if($this->check($name)) {
            $this->arParams["attributes"]["name"] = $name;
        }
        if($this->check($value)) {
            $this->arParams["attributes"]["value"] = $value;
        }
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
     * Set value attribute
     * @param string $value
     * @return $this
     */
    function value($value) {
        $this->arParams["attributes"]["value"] = $value;
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

    /**
     * Set valuetype attribute
     * @param string $valuetype
     * @return $this
     */
    function _valuetype($valuetype) {
        $this->arParams["attributes"]["valuetype"] = $valuetype;
        return $this;
    }
}