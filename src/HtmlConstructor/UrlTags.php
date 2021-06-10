<?php

namespace HtmlConstructor;

trait UrlTags {
    static $TARGET_SELF = "_self";
    static $TARGET_BLANK = "_blank";
    static $TARGET_PARENT = "_parent";
    static $TARGET_TOP = "_top";

    /**
     * UrlTags constructor.
     * @param string $href
     */
    function __construct($href)
    {
        if(gettype($href) === "string" && strlen($href) > 0) {
            $this->arParams["attributes"]["href"] = $href;
        }

        return $this;
    }

    /**
     * Set href attribute
     * @param string $href
     * @return $this
     */
    function href($href) {
        $this->arParams["attributes"]["href"] = $href;
        return $this;
    }

    /**
     * Set target attribute
     * @param self::TARGET_*|string $target
     * @return $this
     */
    function target($target) {
        $this->arParams["attributes"]["target"] = $target;
        return $this;
    }
}