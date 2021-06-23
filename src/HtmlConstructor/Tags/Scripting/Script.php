<?php

namespace HtmlConstructor\Tags\Scripting;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;
use HtmlConstructor\Traits\Download;

class Script extends BaseTag implements Tag {
    use Struct;
    use Download;
    public function getName()
    {
        return "script";
    }

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
     * Set crossorigin attribute
     * @param string $async
     * @return $this
     */
    function async($async) {
        $this->arParams["attributes"]["async"] = $async;
        return $this;
    }

    /**
     * Set defer attribute
     * @param string $defer
     * @return $this
     */
    function defer($defer) {
        $this->arParams["attributes"]["defer"] = $defer;
        return $this;
    }

    /**
     * Set integrity attribute
     * @param string $integrity
     * @return $this
     */
    function integrity($integrity) {
        $this->arParams["attributes"]["integrity"] = $integrity;
        return $this;
    }

    /**
     * Set nomodule attribute
     * @param string $nomodule
     * @return $this
     */
    function nomodule($nomodule) {
        $this->arParams["attributes"]["nomodule"] = $nomodule;
        return $this;
    }

    /**
     * Set nonce attribute
     * @param string $nonce
     * @return $this
     */
    function nonce($nonce) {
        $this->arParams["attributes"]["nonce"] = $nonce;
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
     *  Set charset attribute
     * @param $charset
     * @return $this
     */
    function _charset($charset) {
        $this->arParams["attributes"]["charset"] = $charset;
        return $this;
    }

    /**
     *  Set language attribute
     * @param $language
     * @return $this
     */
    function _language($language) {
        $this->arParams["attributes"]["language"] = $language;
        return $this;
    }

}