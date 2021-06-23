<?php

namespace HtmlConstructor\Traits;

use HtmlConstructor\BaseTag;

trait Struct {
    /**
     * Set children
     * @param BaseTag|BaseTag[]|string $children
     * @return $this
     */
    function children($children) {
        if(gettype($children) === "string") {
            $this->arParams["contains"] = $children;
        } else {
            $this->arParams["children"] = is_array($children) ? $children : [$children];
        }
        return $this;
    }

    /**
     * @param string $contains
     * @return $this
     */
    function contains($contains) {
        $this->arParams["contains"] = $contains;
        return $this;
    }

    /**
     * Render HTML element
     * @return string HTML string
     */
    function render() {
        $items = [$this->getName()];
        if($this->arParams && array_key_exists("attributes", $this->arParams) ){
            if($this->arParams["attributes"] && count($this->arParams["attributes"]) > 0) {
                $items[] = $this->getAttributesString();
            }
        }



        $children = [];
        if($this->arParams && (array_key_exists("children", $this->arParams) ||
                array_key_exists("contains", $this->arParams))
        ) {
            if($this->arParams["children"] && count($this->arParams["children"]) > 0) {
                foreach ($this->arParams["children"] as $child) {
                    $children[] = $child->render();
                }
            } elseif ($this->arParams["contains"]) {
                $children[] = $this->arParams["contains"];
            }
        }

        return implode("", [
            "<",
            implode(" ", $items),
            ">",
            implode("", $children),
            "</",
            $this->getName(),
            ">"
        ]);
    }
}