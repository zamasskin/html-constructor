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

    public function testFigcaption() {
        $render = '<figcaption></figcaption>';
        $this->assertSame((new Tags\TextContent\Figcaption())->render(), $render);
        $this->assertSame((new Tags\TextContent\Figcaption())->render(), Tags::Figcaption()->render());
    }

    public function testDt() {
        $render = '<dt></dt>';
        $this->assertSame((new Tags\TextContent\Dt())->render(), $render);
        $this->assertSame((new Tags\TextContent\Dt())->render(), Tags::Dt()->render());
    }

    public function testFigure() {
        $render = '<figure></figure>';
        $this->assertSame((new Tags\TextContent\Figure())->render(), $render);
        $this->assertSame((new Tags\TextContent\Figure())->render(), Tags::Figure()->render());
    }

    public function testHr() {
        $render = '<hr />';
        $this->assertSame((new Tags\TextContent\Hr())->render(), $render);
        $this->assertSame((new Tags\TextContent\Hr())->render(), Tags::Hr()->render());
    }

    public function testLi() {
        $value = "01";
        $contains = "one";
        $render = sprintf('<li value="%s">%s</li>', $value, $contains);
        $this->assertSame((new Tags\TextContent\Li())->value($value)->contains($contains)->render(), $render);
        $this->assertSame((new Tags\TextContent\Li($value, $contains))->render(), $render);
        $this->assertSame((new Tags\TextContent\Li($value, $contains))->render(), Tags::Li($value, $contains)->render());
    }

    public function testOl() {
        $value = "01";
        $contains = "one";
        $render = sprintf('<ol value="%s">%s</ol>', $value, $contains);
        $this->assertSame((new Tags\TextContent\Ol())->value($value)->contains($contains)->render(), $render);
        $this->assertSame((new Tags\TextContent\Ol($value, $contains))->render(), $render);
        $this->assertSame((new Tags\TextContent\Ol($value, $contains))->render(), Tags::Ol($value, $contains)->render());
    }

    public function testP() {
        $contains = "test contains";
        $render = sprintf('<p>%s</p>', $contains);
        $this->assertSame((new Tags\TextContent\P())->contains($contains)->render(), $render);
        $this->assertSame((new Tags\TextContent\P($contains))->render(), $render);
        $this->assertSame((new Tags\TextContent\P($contains))->render(), Tags::P($contains)->render());
    }

    public function testPre() {
        $contains = "test contains";
        $render = sprintf('<pre>%s</pre>', $contains);
        $this->assertSame((new Tags\TextContent\Pre())->contains($contains)->render(), $render);
        $this->assertSame((new Tags\TextContent\Pre($contains))->render(), $render);
        $this->assertSame((new Tags\TextContent\Pre($contains))->render(), Tags::Pre($contains)->render());
    }
}