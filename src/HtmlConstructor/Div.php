<?php

namespace HtmlConstructor;

class Div extends BaseTag implements Tag {
    use StructTag;
    public function getName()
    {
        return "div";
    }
}