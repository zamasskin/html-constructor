<?php

namespace HtmlConstructor\Traits;

trait Input {
    use FromForm;
    use Disabled;
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
     * Set autofocus attribute
     * @param string $autofocus
     * @return $this
     */
    function autofocus($autofocus) {
        $this->arParams["attributes"]["autofocus"] = $autofocus;
        return $this;
    }

    /**
     * Set attribute name
     * @param string $name
     * @return $this
     */
    function name($name) {
        $this->arParams["attributes"]["name"] = $name;
        return $this;
    }

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
     * Set required attribute
     * @param string $required
     * @return $this
     */
    function required($required) {
        $this->arParams["attributes"]["required"] = $required;
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