<?php

namespace HtmlConstructor\Tags\Forms;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;
use HtmlConstructor\Traits\MinMaxForm;
use HtmlConstructor\Traits\FromForm;

class Meter extends BaseTag implements Tag {
    use Struct;
    use MinMaxForm;
    use FromForm;

    public function getName()
    {
        return "meter";
    }

    /**
     * Legend constructor.
     * @param false|string $value
     */
    public function __construct($value = false)
    {
        if(gettype($value) === "string" && strlen($value) > 0) {
            $this->value($value);
        }
        return $this;
    }

    /**
     * Set value attribute
     * @param int|float $value
     * @return $this
     */
    function value($value) {
        $this->arParams["attributes"]["value"] = $value;
        return $this;
    }

    /**
     * Set low attribute
     * @param int|float $low
     * @return $this
     */
    function low($low) {
        $this->arParams["attributes"]["low"] = $low;
        return $this;
    }

    /**
     * Set high attribute
     * @param int|float $high
     * @return $this
     */
    function high($high) {
        $this->arParams["attributes"]["high"] = $high;
        return $this;
    }

    /**
     * Set optimum attribute
     * @param int|float $optimum
     * @return $this
     */
    function optimum($optimum) {
        $this->arParams["attributes"]["optimum"] = $optimum;
        return $this;
    }
}