<?php
namespace HtmlConstructor\Traits\Tags;

use HtmlConstructor\Tags as HtmlTags;

trait ContentSectioning {
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
}