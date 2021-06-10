<?php
use HtmlConstructor\Tags;
use PHPUnit\Framework\TestCase;


class TagTest extends TestCase {
    public function testDiv() {
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
}