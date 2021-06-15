<?php

namespace HtmlConstructor\Tags\InlineTextSemantics;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\ContainsStruct;

class Bdo extends BaseTag implements Tag {
    use ContainsStruct;

    static $DIR_LTR = "ltr";
    static $DIR_RTL = "ltr";

    public function getName()
    {
        return "bdo";
    }

    /**
     * @param self::$DIR_|string $dir
     * @return $this
     */
    function dir($dir) {
        $this->arParams["attributes"]["dir"] = $dir;
        return $this;
    }
}