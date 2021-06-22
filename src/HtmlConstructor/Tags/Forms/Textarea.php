<?php

namespace HtmlConstructor\Tags\Forms;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;
use HtmlConstructor\Traits\ForInput;

class Textarea extends BaseTag implements Tag {
    use Struct;
    use ForInput;
    public function getName()
    {
        return "textarea";
    }

    /**
     * Select constructor.
     * @param false|string $name
     * @param false|string $contains
     */
    public function __construct($name = false, $contains = false)
    {
        if($this->check($name)) {
            $this->name($name);
        }
        if($this->check($contains)) {
            $this->contains($contains);
        }
        return $this;
    }

    /**
     * Set value attribute
     * @param string $value
     * @return $this
     */
    function value($value) {
        $this->arParams["attributes"]["value"] = $value;
        return $this;
    }

    /**
     * Set autocapitalize attribute
     * @param string $autocapitalize
     * @return $this
     */
    function autocapitalize($autocapitalize) {
        $this->arParams["attributes"]["autocapitalize"] = $autocapitalize;
        return $this;
    }

    /**
     * Set autocorrect attribute
     * @param string $autocorrect
     * @return $this
     */
    function autocorrect($autocorrect) {
        $this->arParams["attributes"]["autocorrect"] = $autocorrect;
        return $this;
    }

    /**
     * Set cols attribute
     * @param integer $cols
     * @return $this
     */
    function cols($cols) {
        $this->arParams["attributes"]["cols"] = $cols;
        return $this;
    }

    /**
     * Set rows attribute
     * @param integer $rows
     * @return $this
     */
    function rows($rows) {
        $this->arParams["attributes"]["rows"] = $rows;
        return $this;
    }

    /**
     * Set maxlength attribute
     * @param string $maxlength
     * @return $this
     */
    function maxlength($maxlength) {
        $this->arParams["attributes"]["maxlength"] = $maxlength;
        return $this;
    }

    /**
     * Set minlength attribute
     * @param string $minlength
     * @return $this
     */
    function minlength($minlength) {
        $this->arParams["attributes"]["minlength"] = $minlength;
        return $this;
    }

    /**
     * Set placeholder attribute
     * @param string $placeholder
     * @return $this
     */
    function placeholder($placeholder) {
        $this->arParams["attributes"]["placeholder"] = $placeholder;
        return $this;
    }

    /**
     * Set readonly attribute
     * @return $this
     */
    function readonly() {
        $this->arParams["attributes"]["readonly"] = NULL;
        return $this;
    }

    /**
     * Set required attribute
     * @return $this
     */
    function required() {
        $this->arParams["attributes"]["required"] = NULL;
        return $this;
    }

    /**
     * Set spellcheck attribute
     * @param string $spellcheck
     * @return $this
     */
    function spellcheck($spellcheck) {
        $this->arParams["attributes"]["spellcheck"] = $spellcheck;
        return $this;
    }

    /**
     * Set wrap attribute
     * @param string $wrap
     * @return $this
     */
    function wrap($wrap) {
        $this->arParams["attributes"]["wrap"] = $wrap;
        return $this;
    }
}