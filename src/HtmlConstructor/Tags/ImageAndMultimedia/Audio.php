<?php

namespace HtmlConstructor\Tags\ImageAndMultimedia;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Download;
use HtmlConstructor\Traits\Struct;
use HtmlConstructor\Traits\Multimedia;


class Audio extends BaseTag implements Tag
{
    use Download;
    use Struct;
    use Multimedia;
    public function getName()
    {
        return "audio";
    }


    /**
     * Set volume src
     * @param string $volume
     * @return $this
     */
    function volume($volume) {
        $this->arParams["attributes"]["volume"] = $volume;
        return $this;
    }

    /**
     * Set played attribute
     * @param boolean $played
     * @return $this
     */
    function played($played) {
        $this->arParams["attributes"]["played"] = $played;
        return $this;
    }
}