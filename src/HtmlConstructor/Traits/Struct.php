<?php

namespace HtmlConstructor\Traits;

use HtmlConstructor\BaseTag;

trait Struct {
    /**
     * Set children
     * @param BaseTag|BaseTag[] $children
     * @return $this
     */
    function children($children) {
        $this->arParams["children"] = is_array($children) ? $children : [$children];
        return $this;
    }

    /**
     * Render HTML element
     * @return string HTML string
     */
    function render() {
        $items = [$this->getName()];
        if(count($this->arParams["attributes"]) > 0) {
            $items[] = $this->getAttributesString();
        }


        $children = [];
        if($this->arParams["children"] && count($this->arParams["children"]) > 0) {
            foreach ($this->arParams["children"] as $child) {
                $children[] = $child->render();
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