<?php

namespace HtmlConstructor\Tags\ImageAndMultimedia;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;

class Track extends BaseTag implements Tag {
    public function getName()
    {
        return "track";
    }

    static $KIND_SUBTITLES = "subtitles";
    static $KIND_CAPTIONS = "captions";
    static $KIND_DESCRIPTIONS = "descriptions";
    static $KIND_CHAPTERS = "chapters";
    static $KIND_METADATA = "metadata";

    /**
     * Set default attribute
     * @return $this
     */
    public function default() {
        $this->arParams["attributes"]["default"] = NULL;
        return $this;
    }

    /**
     * Set label attribute
     * @param string $label
     * @return $this
     */
    public function label($label) {
        $this->arParams["attributes"]["label"] = $label;
        return $this;
    }

    /**
     * Set src attribute
     * @param string $src
     * @return $this
     */
    public function src($src) {
        $this->arParams["attributes"]["src"] = $src;
        return $this;
    }

    /**
     * Set srclang attribute
     * @param string $srclang
     * @return $this
     */
    public function srclang($srclang) {
        $this->arParams["attributes"]["srclang"] = $srclang;
        return $this;
    }


    /**
     * Set kind attribute
     * @param self::$KIND_*|string $kind
     * @return $this
     */
    public function kind($kind) {
        $this->arParams["attributes"]["kind"] = $kind;
        return $this;
    }
}