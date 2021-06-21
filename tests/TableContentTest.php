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

    public function testThead() {
        $render = "<thead></thead>";
        $this->assertSame(
            (new Tags\TableContent\Thead())->render(),
            $render
        );

        $this->assertSame(
            (new Tags\TableContent\Thead())->render(),
            Tags::Thead()->render()
        );
    }
}