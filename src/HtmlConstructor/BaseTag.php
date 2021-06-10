<?php

namespace HtmlConstructor;

abstract class BaseTag implements Tag {
    protected $arParams = array();

    /**
     * Set class name
     * @param string $name
     * @return $this
     */
    function className($name) {
        $this->arParams["attributes"]["class"] = $name;
        return $this;
    }

    /**
     * Set styles
     * @param string $style
     * @return $this
     */
    function style($style) {
        $this->arParams["attributes"]["style"] = $style;
        return $this;
    }


    /**
     * Set Attribute
     * @param string $name
     * @param string $value
     * @return $this
     */
    function setAttribute($name,  $value) {
        $this->arParams["attributes"][$name] = $value;
        return $this;
    }


    /**
     * Generate attribute
     * @param $name attrubute name
     * @param $value attrubute value
     * @return string attribute string
     */
    private function mapAttribute($name, $value) {
        return implode("", [$name, '=', '"', $value, '"']);
    }

    /**
     * Generate Attributes
     * @return string attributes string
     */
    protected function getAttributesString() {
        $attributes = array_map(
            array($this, "mapAttribute"),
            array_keys($this->arParams["attributes"]),
            array_values($this->arParams["attributes"])
        );
        return implode(" ", $attributes);
    }

    /**
     * Render HTML element
     * @return string HTML string
     */
    function render() {
        $items = [$this->getName()];
        if($this->arParams["attributes"] && count($this->arParams["attributes"]) > 0) {
            $items[] = $this->getAttributesString();
        }
        return "<" . implode(" ", $items) . " />";
    }
}