<?php

namespace HtmlConstructor\Tags;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag as InterfaceTag;
use HtmlConstructor\Traits\Struct;

class Tag extends BaseTag implements InterfaceTag {
    use Struct;
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }
}