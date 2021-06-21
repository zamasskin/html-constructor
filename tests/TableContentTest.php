<?php
use HtmlConstructor\Tags;
use PHPUnit\Framework\TestCase;

class TableContentTest extends TestCase{
    public function testTable() {
        $render = "<table></table>";
        $this->assertSame(
            (new Tags\TableContent\Table())->render(),
            $render
        );

        $this->assertSame(
            (new Tags\TableContent\Table())->render(),
            Tags::Table()->render()
        );
    }
}