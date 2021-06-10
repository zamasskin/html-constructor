<?php

namespace HtmlConstructor\Tags\TextContent;

use HtmlConstructor\BaseTag;
use HtmlConstructor\Tag;

class Hr extends BaseTag implements Tag {
    function getName()
    {
        return "hr";
    }
}