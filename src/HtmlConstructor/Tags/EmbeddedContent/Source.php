<?php

namespace HtmlConstructor\Tags\EmbeddedContent;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Size;

class Source extends BaseTag implements Tag {
    use Size;
    public function getName()
    {
        return "source";
    }

    public function __construct($src = false, $type = false)
    {
        if(gettype($src) === "string" && strlen($src) > 0) {
            $this->arParams["attributes"]["src"] = $src;
        }
        if(gettype($type) === "string" && strlen($type) > 0) {
            $this->arParams["attributes"]["type"] = $type;
        }
        return $this;
    }

    /**
     * Set src attribute
     * @param string $src
     * @return $this
     */
    function src($src) {
        $this->arParams["attributes"]["src"] = $src;
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


    /**
     * Set media attribute
     * @param string $media
     * @return $this
     */
    function media($media) {
        $this->arParams["attributes"]["media"] = $media;
        return $this;
    }

    /**
     * Set sizes attribute
     * @param string $sizes
     * @return $this
     */
    function sizes($sizes) {
        $this->arParams["attributes"]["sizes"] = $sizes;
        return $this;
    }

    /**
     * Set srcset attribute
     * @param string $srcset
     * @return $this
     */
    function srcset($srcset) {
        $this->arParams["attributes"]["srcset"] = $srcset;
        return $this;
    }
}