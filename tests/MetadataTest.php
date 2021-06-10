<?php
use HtmlConstructor\Tags;
use PHPUnit\Framework\TestCase;


class MetadataTest extends TestCase {
    public function testLinkTag() {
        $href = "example.css";
        $rel = "stylesheet";
        $render = sprintf('<link href="%s" rel="%s" />', $href, $rel);
        $this->assertSame(
            (new Tags\Metadata\Link())->href($href)->rel($rel)->render(),
            $render
        );

        $this->assertSame(
            (new Tags\Metadata\Link($href, $rel))->render(),
            $render
        );

        $this->assertSame(
            (new Tags\Metadata\Link($href, $rel))->render(),
            Tags::Link($href, $rel)->render()
        );
    }

    public function testBaseTag() {
        $href = "/test/";
        $target = Tags\Metadata\Base::$TARGET_BLANK;
        $render = sprintf('<base href="%s" target="%s" />', $href, $target);
        $this->assertSame(
            (new Tags\Metadata\Base())->href($href)->target($target)->render(),
            $render
        );
        $this->assertSame(
            (new Tags\Metadata\Base($href))->target($target)->render(),
            $render
        );

        $this->assertSame(
            (new Tags\Metadata\Base($href))->render(),
            Tags::Base($href)->render()
        );
    }
}