<?php

namespace HtmlConstructor\Tags\EmbeddedContent;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Size;

class Embed extends BaseTag implements Tag {
    use Size;
    public function getName()
    {
        return "embed";
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

}