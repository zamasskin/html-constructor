<?php

namespace HtmlConstructor\Tags\TableContent;

use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Tbody extends Thead implements Tag {
    use Struct;
    public function getName()
    {
        return "tbody";
    }
}