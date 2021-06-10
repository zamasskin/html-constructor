<?php

namespace HtmlConstructor;

class Base extends BaseTag implements Tag {
    use UrlTags;
    public function getName()
    {
        return "base";
    }
}