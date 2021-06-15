<?php
namespace HtmlConstructor\Traits\Tags;

use HtmlConstructor\Tags as HtmlTags;

trait InlineTextSemantics {
    static function A($href = false, $contains = false) {
        return new HtmlTags\InlineTextSemantics\A($href, $contains);
    }

    static function Abbr($contains = false) {
        return new HtmlTags\InlineTextSemantics\Abbr($contains);
    }

    static  function B($contains = false) {
        return new HtmlTags\InlineTextSemantics\B($contains);
    }

    static  function Bdi($contains = false) {
        return new HtmlTags\InlineTextSemantics\Bdi($contains);
    }

    static  function Bdo($contains = false) {
        return new HtmlTags\InlineTextSemantics\Bdo($contains);
    }

    static  function Br() {
        return new HtmlTags\InlineTextSemantics\Br();
    }

    static  function Cite() {
        return new HtmlTags\InlineTextSemantics\Cite();
    }

    static  function Code($contains = false) {
        return new HtmlTags\InlineTextSemantics\Code($contains);
    }

    static  function Data($value = false, $contains = false) {
        return new HtmlTags\InlineTextSemantics\Data($value, $contains);
    }

    static  function Dfn($contains = false) {
        return new HtmlTags\InlineTextSemantics\Dfn($contains);
    }

    static  function Em($contains = false) {
        return new HtmlTags\InlineTextSemantics\Em($contains);
    }

    static  function I($contains = false) {
        return new HtmlTags\InlineTextSemantics\I($contains);
    }

    static  function Kbd($contains = false) {
        return new HtmlTags\InlineTextSemantics\Kbd($contains);
    }

    static  function Mark($contains = false) {
        return new HtmlTags\InlineTextSemantics\Mark($contains);
    }

    static  function Q() {
        return new HtmlTags\InlineTextSemantics\Q();
    }

    static  function Rp() {
        return new HtmlTags\InlineTextSemantics\Rp();
    }

    static  function Rt() {
        return new HtmlTags\InlineTextSemantics\Rt();
    }

    static  function Ruby() {
        return new HtmlTags\InlineTextSemantics\Ruby();
    }

    static  function S($contains = false) {
        return new HtmlTags\InlineTextSemantics\S($contains);
    }

    static  function Samp($contains = false) {
        return new HtmlTags\InlineTextSemantics\Samp($contains);
    }

    static  function Small($contains = false) {
        return new HtmlTags\InlineTextSemantics\Small($contains);
    }

    static  function Span($contains = false) {
        return new HtmlTags\InlineTextSemantics\Span($contains);
    }

    static  function Strong($contains = false) {
        return new HtmlTags\InlineTextSemantics\Strong($contains);
    }

    static  function Sub($contains = false) {
        return new HtmlTags\InlineTextSemantics\Sub($contains);
    }

    static  function Sup($contains = false) {
        return new HtmlTags\InlineTextSemantics\Sup($contains);
    }

    static  function Time($datetime = false, $contains = false) {
        return new HtmlTags\InlineTextSemantics\Time($datetime, $contains);
    }

    static  function U($contains = false) {
        return new HtmlTags\InlineTextSemantics\U($contains);
    }

    static  function Var($contains = false) {
        return new HtmlTags\InlineTextSemantics\VarTag($contains);
    }

    static  function Wbr() {
        return new HtmlTags\InlineTextSemantics\Wbr();
    }
}