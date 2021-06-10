<?php

namespace HtmlConstructor;

trait SizeTag {
    /**
     * Set width
     * @param int|string $width
     * @return $this
     */
    function width($width) {
        $this->arParams["attributes"]["width"] = $width;
        return $this;
    }

    /**
     * Set height
     * @param int|string $height
     * @return $this
     */
    function height($height) {
        $this->arParams["attributes"]["height"] = $height;
        return $this;
    }
}