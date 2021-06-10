<?php

namespace HtmlConstructor\Tags;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Html extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "html";
    }

    /**
     * Set xmlns attribute
     * @param string $xmlns
     * @return $this
     */
    function xmlns($xmlns) {
        $this->arParams["attributes"]["xmlns"] = $xmlns;
        return $this;
    }

    /**
     * Set lang attribute
     * @param string $lang
     * @return $this
     */
    function lang($lang) {
        $this->arParams["attributes"]["lang"] = $lang;
        return $this;
    }

    /**
     * Set manifest attribute
     * @param string $manifest
     * @return $this
     */
    function _manifest($manifest) {
        $this->arParams["attributes"]["manifest"] = $manifest;
        return $this;
    }

    /**
     * Set version attribute
     * @param string $version
     * @return $this
     */
    function _version($version) {
        $this->arParams["attributes"]["version"] = $version;
        return $this;
    }
}