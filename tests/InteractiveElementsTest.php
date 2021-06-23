<?php
use HtmlConstructor\Tags;
use PHPUnit\Framework\TestCase;


class InteractiveElementsTest extends TestCase {
    public function testDetails() {
        $render = '<details open></details>';
        $this->assertSame(
            (new Tags\InteractiveElements\Details())->open()->render(),
            $render
        );

        $this->assertSame(
            (new Tags\InteractiveElements\Details())->open()->render(),
            Tags::Details()->open()->render()
        );
    }
}