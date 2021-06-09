<?php
use HtmlConstructor as Tag;
use PHPUnit\Framework\TestCase;


class TagTest extends TestCase {
    public function testDiv() {
        $html = (new Tag\Div())
            ->style("color: red; background: #000")
            ->className("parent")
            ->children([
                (new Tag\Div())->className("one"),
                (new Tag\Div())->className("two"),
            ]);
        $render = '<div style="color: red; background: #000" class="parent"><div class="one"></div><div class="two"></div></div>';
        $this->assertSame($html->render(), $render);
    }
}