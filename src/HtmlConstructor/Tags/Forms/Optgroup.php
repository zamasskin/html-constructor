<?php

namespace HtmlConstructor\Tags\Forms;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;
use HtmlConstructor\Traits\Disabled;
use HtmlConstructor\Traits\LabelAttribute;

class Optgroup extends BaseTag implements Tag {
    use Struct;
    use Disabled;
    use LabelAttribute;
    public function getName()
    {
        return "optgroup";
    }

    /**
     * Legend constructor.
     * @param false|string $label
     */
    public function __construct($label = false)
    {
        if($this->check($label)) {
            $this->label($label);
        }
        return $this;
    }
}