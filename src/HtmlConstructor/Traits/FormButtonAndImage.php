<?php

namespace HtmlConstructor\Traits;

trait FormButtonAndImage
{

    /**
     * Set formaction alt
     * @param string $formaction
     * @return $this
     */
    function formaction($formaction) {
        $this->arParams["attributes"]["formaction"] = $formaction;
        return $this;
    }

    /**
     * Set formenctype alt
     * @param string $formenctype
     * @return $this
     */
    function formenctype($formenctype) {
        $this->arParams["attributes"]["formenctype"] = $formenctype;
        return $this;
    }

    /**
     * Set formmethod alt
     * @param string $formmethod
     * @return $this
     */
    function formmethod($formmethod) {
        $this->arParams["attributes"]["formmethod"] = $formmethod;
        return $this;
    }

    /**
     * Set formnovalidate alt
     * @param string $formnovalidate
     * @return $this
     */
    function formnovalidate($formnovalidate) {
        $this->arParams["attributes"]["formnovalidate"] = $formnovalidate;
        return $this;
    }

    /**
     * Set formtarget alt
     * @param string $formtarget
     * @return $this
     */
    function formtarget($formtarget) {
        $this->arParams["attributes"]["formtarget"] = $formtarget;
        return $this;
    }
}