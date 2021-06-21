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

    public function testTbody() {
        $render = "<tbody></tbody>";
        $this->assertSame(
            (new Tags\TableContent\Tbody())->render(),
            $render
        );

        $this->assertSame(
            (new Tags\TableContent\Tbody())->render(),
            Tags::Tbody()->render()
        );
    }

    public function testTfoot() {
        $render = "<tfoot></tfoot>";
        $this->assertSame(
            (new Tags\TableContent\Tfoot())->render(),
            $render
        );

        $this->assertSame(
            (new Tags\TableContent\Tfoot())->render(),
            Tags::Tfoot()->render()
        );
    }

    public function testTr() {
        $render = "<tr></tr>";
        $this->assertSame(
            (new Tags\TableContent\Tr())->render(),
            $render
        );

        $this->assertSame(
            (new Tags\TableContent\Tr())->render(),
            Tags::Tr()->render()
        );
    }

    public function testTd() {
        $render = "<td></td>";
        $this->assertSame(
            (new Tags\TableContent\Td())->render(),
            $render
        );

        $this->assertSame(
            (new Tags\TableContent\Td())->render(),
            Tags::Td()->render()
        );
    }
}