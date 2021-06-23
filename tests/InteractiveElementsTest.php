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

    public function testDialog() {
        $render = '<dialog open></dialog>';
        $this->assertSame(
            (new Tags\InteractiveElements\Dialog())->open()->render(),
            $render
        );

        $this->assertSame(
            (new Tags\InteractiveElements\Dialog())->open()->render(),
            Tags::Dialog()->open()->render()
        );
    }

    public function testMenu() {
        $render = '<menu></menu>';
        $this->assertSame(
            (new Tags\InteractiveElements\Menu())->render(),
            $render
        );

        $this->assertSame(
            (new Tags\InteractiveElements\Menu())->render(),
            Tags::Menu()->render()
        );
    }

    public function testSummary() {
        $render = '<summary></summary>';
        $this->assertSame(
            (new Tags\InteractiveElements\Summary())->render(),
            $render
        );

        $this->assertSame(
            (new Tags\InteractiveElements\Summary())->render(),
            Tags::Summary()->render()
        );
    }
}