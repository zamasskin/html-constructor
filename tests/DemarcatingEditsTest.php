<?php
use HtmlConstructor\Tags;
use PHPUnit\Framework\TestCase;


class DemarcatingEditsTest extends TestCase {
    public function testDel() {
        $render = '<del></del>';
        $this->assertSame(
            (new Tags\DemarcatingEdits\Del())->render(),
            $render
        );
        $this->assertSame(
            (new Tags\DemarcatingEdits\Del())->render(),
            Tags::Del()->render()
        );
    }

    public function testIns() {
        $render = '<ins></ins>';
        $this->assertSame(
            (new Tags\DemarcatingEdits\Ins())->render(),
            $render
        );
        $this->assertSame(
            (new Tags\DemarcatingEdits\Ins())->render(),
            Tags::Ins()->render()
        );
    }
}