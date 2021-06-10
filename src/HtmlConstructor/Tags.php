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

    static function Article() {
        return new HtmlTags\ContentSectioning\Article();
    }

    static function Aside() {
        return new HtmlTags\ContentSectioning\Aside();
    }

    static function Footer() {
        return new HtmlTags\ContentSectioning\Footer();
    }

    static function Header() {
        return new HtmlTags\ContentSectioning\Header();
    }

    static function Main() {
        return new HtmlTags\ContentSectioning\Main();
    }

    static function Nav() {
        return new HtmlTags\ContentSectioning\Nav();
    }

    static function H1() {
        return new HtmlTags\ContentSectioning\H1();
    }

    static function H2() {
        return new HtmlTags\ContentSectioning\H2();
    }

    static function H3() {
        return new HtmlTags\ContentSectioning\H3();
    }

    static function H4() {
        return new HtmlTags\ContentSectioning\H4();
    }

    static function H5() {
        return new HtmlTags\ContentSectioning\H5();
    }

    static function H6() {
        return new HtmlTags\ContentSectioning\H6();
    }

    static function Section() {
        return new HtmlTags\ContentSectioning\Section();
    }

    // TextContent

    static function Div() {
        return new HtmlTags\TextContent\Div();
    }

    static function Blockquote($cite = false) {
        return new HtmlTags\TextContent\Blockquote($cite);
    }

    static function Dd() {
        return new HtmlTags\TextContent\Dd();
    }

    static function Dl() {
        return new HtmlTags\TextContent\Dl();
    }

    static function Dt() {
        return new HtmlTags\TextContent\Dt();
    }

    static function Figcaption() {
        return new HtmlTags\TextContent\Figcaption();
    }

    static function Figure() {
        return new HtmlTags\TextContent\Figure();
    }

    // ImageAndMultimedia

    static function Img($src = false, $alt = false) {
        return new HtmlTags\ImageAndMultimedia\Img($src, $alt);
    }
}