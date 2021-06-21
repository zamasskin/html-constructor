<?php

namespace HtmlConstructor\Traits;

trait Input {
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
     * Set disabled attribute
     * @param string $disabled
     * @return $this
     */
    function disabled($disabled) {
        $this->arParams["attributes"]["disabled"] = $disabled;
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
     * Set attribute name
     * @param string $name
     * @return $this
     */
    function name($name) {
        $this->arParams["attributes"]["name"] = $name;
        return $this;
    }

    /**
     * Set list name
     * @param string $list
     * @return $this
     */
    function list($list) {
        $this->arParams["attributes"]["list"] = $list;
        return $this;
    }

    /**
     * Set readonly name
     * @param string $readonly
     * @return $this
     */
    function readonly($readonly) {
        $this->arParams["attributes"]["readonly"] = $readonly;
        return $this;
    }

    /**
     * Set required name
     * @param string $required
     * @return $this
     */
    function required($required) {
        $this->arParams["attributes"]["required"] = $required;
        return $this;
    }

    /**
     * Set value name
     * @param string $value
     * @return $this
     */
    function value($value) {
        $this->arParams["attributes"]["value"] = $value;
        return $this;
    }

    /**
     * Set type name
     * @param string $type
     * @return $this
     */
    function type($type) {
        $this->arParams["attributes"]["type"] = $type;
        return $this;
    }
}