<?php

namespace HtmlConstructor\Tags\ImageAndMultimedia;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;
use HtmlConstructor\Traits\Multimedia;
use HtmlConstructor\Traits\Download;

class Video extends BaseTag implements Tag {
    use Struct;
    use Multimedia;
    use Download;

    public function getName()
    {
        return "video";
    }

    public function __construct($src = false)
    {
        if(gettype($src) === "string" && strlen($src) > 0) {
            $this->arParams["attributes"]["src"] = $src;
        }
        return $this;
    }

    /**
     * Set width src
     * @param string $width
     * @return $this
     */
    function width($width) {
        $this->arParams["attributes"]["width"] = $width;
        return $this;
    }

    /**
     * Set poster src
     * @param string $poster
     * @return $this
     */
    function poster($poster) {
        $this->arParams["attributes"]["poster"] = $poster;
        return $this;
    }

    /**
     * Set playsinline src
     * @param boolean $playsinline
     * @return $this
     */
    function playsinline($playsinline) {
        $this->arParams["attributes"]["playsinline"] = $playsinline;
        return $this;
    }

    /**
     * Set height src
     * @param boolean $height
     * @return $this
     */
    function height($height) {
        $this->arParams["attributes"]["height"] = $height;
        return $this;
    }

    /**
     * Set disablepictureinpicture src
     * @param string $disablepictureinpicture
     * @return $this
     */
    function disablepictureinpicture($disablepictureinpicture) {
        $this->arParams["attributes"]["disablepictureinpicture"] = $disablepictureinpicture;
        return $this;
    }

    /**
     * Set controlslist src
     * @param string $controlslist
     * @return $this
     */
    function controlslist($controlslist) {
        $this->arParams["attributes"]["controlslist"] = $controlslist;
        return $this;
    }

    /**
     * Set autopictureinpicture src
     * @param string $autopictureinpicture
     * @return $this
     */
    function autopictureinpicture($autopictureinpicture) {
        $this->arParams["attributes"]["autopictureinpicture"] = $autopictureinpicture;
        return $this;
    }
}