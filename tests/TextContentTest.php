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
}