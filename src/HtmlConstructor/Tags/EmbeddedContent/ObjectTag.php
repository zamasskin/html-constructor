<?php

namespace HtmlConstructor\Tags\EmbeddedContent;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Size;
use HtmlConstructor\Traits\Struct;

class ObjectTag extends BaseTag implements Tag {
    use Size;
    use Struct;
    public function getName()
    {
        return "object";
    }

    public function __construct($data = false, $type = false)
    {
        if(gettype($data) === "string" && strlen($data) > 0) {
            $this->arParams["attributes"]["data"] = $data;
        }
        if(gettype($type) === "string" && strlen($type) > 0) {
            $this->arParams["attributes"]["type"] = $type;
        }
        return $this;
    }

    /**
     * Set data attribute
     * @param string $data
     * @return $this
     */
    function data($data) {
        $this->arParams["attributes"]["data"] = $data;
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
     * Set form attribute
     * @param string $form
     * @return $this
     */
    function form($form) {
        $this->arParams["attributes"]["form"] = $form;
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
     * Set usemap attribute
     * @param string $usemap
     * @return $this
     */
    function usemap($usemap) {
        $this->arParams["attributes"]["usemap"] = $usemap;
        return $this;
    }


    /**
     * Set archive attribute
     * @param string $archive
     * @return $this
     */
    function _archive($archive) {
        $this->arParams["attributes"]["archive"] = $archive;
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
     * Set classid attribute
     * @param string $classid
     * @return $this
     */
    function _classid($classid) {
        $this->arParams["attributes"]["classid"] = $classid;
        return $this;
    }

    /**
     * Set codebase attribute
     * @param string $codebase
     * @return $this
     */
    function _codebase($codebase) {
        $this->arParams["attributes"]["codebase"] = $codebase;
        return $this;
    }

    /**
     * Set codetype attribute
     * @param string $codetype
     * @return $this
     */
    function _codetype($codetype) {
        $this->arParams["attributes"]["codetype"] = $codetype;
        return $this;
    }

    /**
     * Set declare attribute
     * @param string $declare
     * @return $this
     */
    function _declare($declare) {
        $this->arParams["attributes"]["declare"] = $declare;
        return $this;
    }

    /**
     * Set standby attribute
     * @param string $standby
     * @return $this
     */
    function _standby($standby) {
        $this->arParams["attributes"]["standby"] = $standby;
        return $this;
    }
}