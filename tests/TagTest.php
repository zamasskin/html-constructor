<?php
use HtmlConstructor\Tags;
use PHPUnit\Framework\TestCase;


class TagTest extends TestCase {
    public function testDivTag() {
        $html = (new Tags\Div())
            ->style("color: red; background: #000")
            ->className("parent")
            ->children([
                (new Tags\Div())->className("one"),
                (new Tags\Div())->className("two"),
            ]);
        $render = '<div style="color: red; background: #000" class="parent"><div class="one"></div><div class="two"></div></div>';
        $this->assertSame($html->render(), $render);
    }

    public function testImgTag() {
        $src ="test.png";
        $alt = "test";
        $render = sprintf('<img src="%s" alt="%s" />', $src, $alt);

        $this->assertSame(
            (new Tags\Img())->src($src)->alt($alt)->render(),
            $render
        );
        $this->assertSame(
            (new Tags\Img($src, $alt))->render(),
            $render
        );
    }


    public function testBaseTag() {
        $href = "/test/";
        $target = Tags\Base::$TARGET_BLANK;
        $render = sprintf('<base href="%s" target="%s" />', $href, $target);
        $this->assertSame(
            (new Tags\Base())->href($href)->target($target)->render(),
            $render
        );
        $this->assertSame(
            (new Tags\Base($href))->target($target)->render(),
            $render
        );
    }

    public function testLinkTag() {
        $href = "example.css";
        $rel = "stylesheet";
        $render = sprintf('<link href="%s" rel="%s" />', $href, $rel);
        $this->assertSame(
            (new Tags\Link())->href($href)->rel($rel)->render(),
            $render
        );

        $this->assertSame(
            (new Tags\Link($href, $rel))->render(),
            $render
        );
    }
}