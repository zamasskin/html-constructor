<?php

namespace HtmlConstructor;
use HtmlConstructor\Tags as HtmlTags;

class Tags {

    static function Html() {
        return new HtmlTags\Html();
    }

    static function Body() {
        return new HtmlTags\Body();
    }

    //Metadata

    static function Base($href = false) {
        return new HtmlTags\Metadata\Base($href);
    }

    static function Head() {
        return new HtmlTags\Metadata\Head();
    }

    static function Link($href=false, $rel=false) {
        return new HtmlTags\Metadata\Link($href, $rel);
    }

    static function Meta() {
        return new HtmlTags\Metadata\Meta();
    }

    static function Style() {
        return new HtmlTags\Metadata\Style();
    }

    static function Title() {
        return new HtmlTags\Metadata\Title();
    }

    // ContentSectioning

    static function Address() {
        return new HtmlTags\ContentSectioning\Address();
    }

    // TextContent

    static function Div() {
        return new HtmlTags\TextContent\Div();
    }

    // ImageAndMultimedia

    static function Img($src = false, $alt = false) {
        return new HtmlTags\ImageAndMultimedia\Img($src, $alt);
    }
}