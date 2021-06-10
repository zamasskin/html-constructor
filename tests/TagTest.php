<?php
use HtmlConstructor\Tags;
use PHPUnit\Framework\TestCase;


class TagTest extends TestCase {
    public function testHtml() {
        $lang = "en";
        $render = sprintf('<html lang="%s"></html>', $lang);
        $this->assertSame(
            (new Tags\Html())->lang($lang)->render(),
            $render
        );

        $this->assertSame(
            (new Tags\Html())->lang($lang)->render(),
            Tags::Html()->lang($lang)->render()
        );
    }


    public function testDivTag() {
        $html = (new Tags\TextContent\Div())
            ->style("color: red; background: #000")
            ->className("parent")
            ->children([
                (new Tags\TextContent\Div())->className("one"),
                (new Tags\TextContent\Div())->className("two"),
            ]);
        $render = '<div style="color: red; background: #000" class="parent"><div class="one"></div><div class="two"></div></div>';
        $this->assertSame($html->render(), $render);
        $this->assertSame((new Tags\TextContent\Div())->render(), Tags::Div()->render());
    }

    public function testImgTag() {
        $src ="test.png";
        $alt = "test";
        $render = sprintf('<img src="%s" alt="%s" />', $src, $alt);

        $this->assertSame(
            (new Tags\ImageAndMultimedia\Img())->src($src)->alt($alt)->render(),
            $render
        );
        $this->assertSame(
            (new Tags\ImageAndMultimedia\Img($src, $alt))->render(),
            $render
        );

        $this->assertSame(
            (new Tags\ImageAndMultimedia\Img($src, $alt))->render(),
            Tags::Img($src, $alt)->render()
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
}