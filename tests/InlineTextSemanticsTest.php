<?php
use HtmlConstructor\Tags;
use PHPUnit\Framework\TestCase;

class InlineTextSemanticsTest extends TestCase{
    public function testA() {
        $href = "http://exaple.com";
        $contains = "test link";
        $render = sprintf('<a href="%s">%s</a>', $href, $contains);
        $this->assertSame(
            (new Tags\InlineTextSemantics\A())->href($href)->contains($contains)->render(),
            $render
        );
        $this->assertSame(
            (new Tags\InlineTextSemantics\A($href, $contains))->render(),
            $render
        );
        $this->assertSame(
            (new Tags\InlineTextSemantics\A($href, $contains))->render(),
            Tags::A($href, $contains)->render()
        );

    }
}