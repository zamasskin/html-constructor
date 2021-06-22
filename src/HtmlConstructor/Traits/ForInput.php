<?php

namespace HtmlConstructor\Traits;

trait ForInput {
    use Disabled;
    use FromForm;
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
     * Set required attribute
     * @return $this
     */
    function required() {
        $this->arParams["attributes"]["required"] = NULL;
        return $this;
    }
}