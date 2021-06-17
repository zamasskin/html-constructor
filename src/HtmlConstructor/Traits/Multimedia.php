<?php

namespace HtmlConstructor\Traits;

trait Multimedia {
    public function __construct($src = false)
    {
        if(gettype($src) === "string" && strlen($src) > 0) {
            $this->arParams["attributes"]["src"] = $src;
        }
        return $this;
    }

    static $PRELOAD_NONE = "none";
    static $PRELOAD_METADATA = "metadata";
    static $PRELOAD_AUTO = "auto";
    static $PRELOAD_EMPTY = "empty";

    /**
     * Set attribute src
     * @param string $src
     * @return $this
     */
    function src($src) {
        $this->arParams["attributes"]["src"] = $src;
        return $this;
    }

    /**
     * Set autoplay attribute
     * @param boolean $autoplay
     * @return $this
     */
    function autoplay($autoplay) {
        $this->arParams["attributes"]["autoplay"] = $autoplay;
        return $this;
    }

    /**
     * Set controls attribute
     * @return $this
     */
    function controls() {
        $this->arParams["attributes"]["controls"] = NULL;
        return $this;
    }

    /**
     * Set disableremoteplayback attribute
     * @param boolean $disableremoteplayback
     * @return $this
     */
    function disableremoteplayback($disableremoteplayback) {
        $this->arParams["attributes"]["disableremoteplayback"] = $disableremoteplayback;
        return $this;
    }

    /**
     * Set loop attribute
     * @param boolean $loop
     * @return $this
     */
    function loop($loop) {
        $this->arParams["attributes"]["loop"] = $loop;
        return $this;
    }

    /**
     * Set muted attribute
     * @param boolean $muted
     * @return $this
     */
    function muted($muted) {
        $this->arParams["attributes"]["muted"] = $muted;
        return $this;
    }


    /**
     * Set preload attribute
     * @param self::$PRELOAD_*|string $preload
     * @return $this
     */
    function preload($preload) {
        $this->arParams["attributes"]["preload"] = $preload;
        return $this;
    }
}