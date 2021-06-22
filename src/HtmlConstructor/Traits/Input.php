<?php

namespace HtmlConstructor\Traits;

trait Input {
    use ForInput;

    /**
     * Set list attribute
     * @param string $list
     * @return $this
     */
    function list($list) {
        $this->arParams["attributes"]["list"] = $list;
        return $this;
    }

    /**
     * Set readonly attribute
     * @param string $readonly
     * @return $this
     */
    function readonly($readonly) {
        $this->arParams["attributes"]["readonly"] = $readonly;
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
    function type($type) {
        $this->arParams["attributes"]["type"] = $type;
        return $this;
    }
}