<?php
use HtmlConstructor\Tags;
use PHPUnit\Framework\TestCase;


class TextContentTest extends TestCase {
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

    public function testBlockQuote() {
        $cite = 'http://example.com';
        $render = sprintf('<blockquote cite="%s"></blockquote>', $cite);
        $this->assertSame((new Tags\TextContent\Blockquote())->cite($cite)->render(), $render);
        $this->assertSame((new Tags\TextContent\Blockquote($cite))->render(), $render);
        $this->assertSame((new Tags\TextContent\Blockquote($cite))->render(), Tags::Blockquote($cite)->render());
    }

    public function testDd() {
        $render = '<dd></dd>';
        $this->assertSame((new Tags\TextContent\Dd())->render(), $render);
        $this->assertSame((new Tags\TextContent\Dd())->render(), Tags::Dd()->render());
    }

    public function testDl() {
        $render = '<dl></dl>';
        $this->assertSame((new Tags\TextContent\Dl())->render(), $render);
        $this->assertSame((new Tags\TextContent\Dl())->render(), Tags::Dl()->render());
    }

    public function testDt() {
        $render = '<dt></dt>';
        $this->assertSame((new Tags\TextContent\Dt())->render(), $render);
        $this->assertSame((new Tags\TextContent\Dt())->render(), Tags::Dt()->render());
    }
}