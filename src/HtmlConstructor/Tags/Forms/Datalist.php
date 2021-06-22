<?php

namespace HtmlConstructor\Tags\Forms;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;
use HtmlConstructor\Traits\Struct;

class Datalist extends BaseTag implements Tag {
    use Struct;
    public function getName()
    {
        return "datalist";
    }

}