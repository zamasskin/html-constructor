<?php
use HtmlConstructor\Tags;
use HtmlConstructor\Tags\InlineTextSemantics As MyTags;
use PHPUnit\Framework\TestCase;

class InlineTextSemanticsTest extends TestCase{
    public function testA() {
        $href = "http://exaple.com";
        $contains = "test link";
        $render = sprintf('<a href="%s">%s</a>', $href, $contains);
        $this->assertSame(
            (new MyTags\A())->href($href)->contains($contains)->render(),
            $render
        );
        $this->assertSame(
            (new MyTags\A($href, $contains))->render(),
            $render
        );
        $this->assertSame(
            (new MyTags\A($href, $contains))->render(),
            Tags::A($href, $contains)->render()
        );
    }

    public function testAbbr() {
        $contains = "hello test";
        $render = sprintf("<abbr>%s</abbr>", $contains);
        $this->assertSame((new MyTags\Abbr())->contains($contains)->render(), $render);
        $this->assertSame((new MyTags\Abbr($contains))->render(), $render);
        $this->assertSame((new MyTags\Abbr($contains))->render(), Tags::Abbr($contains)->render());
    }

    public function testB() {
        $contains = "hello test";
        $render = sprintf("<b>%s</b>", $contains);
        $this->assertSame((new MyTags\B())->contains($contains)->render(), $render);
        $this->assertSame((new MyTags\B($contains))->render(), $render);
        $this->assertSame((new MyTags\B($contains))->render(), Tags::B($contains)->render());
    }

    public function testBdi() {
        $contains = "hello test";
        $render = sprintf("<bdi>%s</bdi>", $contains);
        $this->assertSame((new MyTags\Bdi())->contains($contains)->render(), $render);
        $this->assertSame((new MyTags\Bdi($contains))->render(), $render);
        $this->assertSame((new MyTags\Bdi($contains))->render(), Tags::Bdi($contains)->render());
    }

    public function testBdo() {
        $contains = "hello test";
        $render = sprintf("<bdo>%s</bdo>", $contains);
        $this->assertSame((new MyTags\Bdo())->contains($contains)->render(), $render);
        $this->assertSame((new MyTags\Bdo($contains))->render(), $render);
        $this->assertSame((new MyTags\Bdo($contains))->render(), Tags::Bdo($contains)->render());
    }

    public function testBr() {
        $render = "<br />";
        $this->assertSame((new MyTags\Br())->render(), $render);
        $this->assertSame((new MyTags\Br())->render(), Tags::Br()->render());
    }

    public function testWbr() {
        $render = "<wbr />";
        $this->assertSame((new MyTags\Wbr())->render(), $render);
        $this->assertSame((new MyTags\Wbr())->render(), Tags::Wbr()->render());
    }


    public function testCite() {
        $contains = "hello test";
        $render = sprintf("<cite>%s</cite>", $contains);
        $this->assertSame((new MyTags\Cite())->contains($contains)->render(), $render);
        $this->assertSame((new MyTags\Cite())->render(), Tags::Cite()->render());
    }


    public function testCode() {
        $contains = "hello test";
        $render = sprintf("<code>%s</code>", $contains);
        $this->assertSame((new MyTags\Code())->contains($contains)->render(), $render);
        $this->assertSame((new MyTags\Code($contains))->render(), $render);
        $this->assertSame((new MyTags\Code($contains))->render(), Tags::Code($contains)->render());
    }


    public function testData() {
        $value = "01";
        $contains = "hello test";
        $render = sprintf('<data value="%s">%s</data>', $value, $contains);
        $this->assertSame((new MyTags\Data())->contains($contains)->value($value)->render(), $render);
        $this->assertSame((new MyTags\Data($value, $contains))->render(), $render);
        $this->assertSame((new MyTags\Data($value, $contains))->render(), Tags::Data($value, $contains)->render());
    }

    public function testDfn() {
        $contains = "hello test";
        $render = sprintf("<dfn>%s</dfn>", $contains);
        $this->assertSame((new MyTags\Dfn())->contains($contains)->render(), $render);
        $this->assertSame((new MyTags\Dfn($contains))->render(), $render);
        $this->assertSame((new MyTags\Dfn($contains))->render(), Tags::Dfn($contains)->render());
    }


    public function testEm() {
        $contains = "hello test";
        $render = sprintf("<em>%s</em>", $contains);
        $this->assertSame((new MyTags\Em())->contains($contains)->render(), $render);
        $this->assertSame((new MyTags\Em($contains))->render(), $render);
        $this->assertSame((new MyTags\Em($contains))->render(), Tags::Em($contains)->render());
    }

    public function testI() {
        $contains = "hello test";
        $render = sprintf("<i>%s</i>", $contains);
        $this->assertSame((new MyTags\I())->contains($contains)->render(), $render);
        $this->assertSame((new MyTags\I($contains))->render(), $render);
        $this->assertSame((new MyTags\I($contains))->render(), Tags::I($contains)->render());
    }

    public function testKbd() {
        $contains = "hello test";
        $render = sprintf("<kbd>%s</kbd>", $contains);
        $this->assertSame((new MyTags\Kbd())->contains($contains)->render(), $render);
        $this->assertSame((new MyTags\Kbd($contains))->render(), $render);
        $this->assertSame((new MyTags\Kbd($contains))->render(), Tags::Kbd($contains)->render());
    }

    public function testMark() {
        $contains = "hello test";
        $render = sprintf("<mark>%s</mark>", $contains);
        $this->assertSame((new MyTags\Mark())->contains($contains)->render(), $render);
        $this->assertSame((new MyTags\Mark($contains))->render(), $render);
        $this->assertSame((new MyTags\Mark($contains))->render(), Tags::Mark($contains)->render());
    }

    public function testQ() {
        $contains = "hello test";
        $render = sprintf("<q>%s</q>", $contains);
        $this->assertSame((new MyTags\Q())->contains($contains)->render(), $render);
        $this->assertSame((new MyTags\Q())->render(), Tags::Q()->render());
    }

    public function testRp() {
        $contains = "hello test";
        $render = sprintf("<rp>%s</rp>", $contains);
        $this->assertSame((new MyTags\Rp())->contains($contains)->render(), $render);
        $this->assertSame((new MyTags\Rp())->render(), Tags::Rp()->render());
    }

    public function testRt() {
        $contains = "hello test";
        $render = sprintf("<rt>%s</rt>", $contains);
        $this->assertSame((new MyTags\Rt())->contains($contains)->render(), $render);
        $this->assertSame((new MyTags\Rt())->render(), Tags::Rt()->render());
    }

    public function testRuby() {
        $contains = "hello test";
        $render = sprintf("<ruby>%s</ruby>", $contains);
        $this->assertSame((new MyTags\Ruby())->contains($contains)->render(), $render);
        $this->assertSame((new MyTags\Ruby())->render(), Tags::Ruby()->render());
    }

    public function testS() {
        $contains = "hello test";
        $render = sprintf("<s>%s</s>", $contains);
        $this->assertSame((new MyTags\S())->contains($contains)->render(), $render);
        $this->assertSame((new MyTags\S($contains))->render(), $render);
        $this->assertSame((new MyTags\S($contains))->render(), Tags::S($contains)->render());
    }

    public function testSamp() {
        $contains = "hello test";
        $render = sprintf("<samp>%s</samp>", $contains);
        $this->assertSame((new MyTags\Samp())->contains($contains)->render(), $render);
        $this->assertSame((new MyTags\Samp($contains))->render(), $render);
        $this->assertSame((new MyTags\Samp($contains))->render(), Tags::Samp($contains)->render());
    }

    public function testSmall() {
        $contains = "hello test";
        $render = sprintf("<small>%s</small>", $contains);
        $this->assertSame((new MyTags\Small())->contains($contains)->render(), $render);
        $this->assertSame((new MyTags\Small($contains))->render(), $render);
        $this->assertSame((new MyTags\Small($contains))->render(), Tags::Small($contains)->render());
    }

    public function testSpan() {
        $contains = "hello test";
        $render = sprintf("<span>%s</span>", $contains);
        $this->assertSame((new MyTags\Span())->contains($contains)->render(), $render);
        $this->assertSame((new MyTags\Span($contains))->render(), $render);
        $this->assertSame((new MyTags\Span($contains))->render(), Tags::Span($contains)->render());
    }

    public function testStrong() {
        $contains = "hello test";
        $render = sprintf("<strong>%s</strong>", $contains);
        $this->assertSame((new MyTags\Strong())->contains($contains)->render(), $render);
        $this->assertSame((new MyTags\Strong($contains))->render(), $render);
        $this->assertSame((new MyTags\Strong($contains))->render(), Tags::Strong($contains)->render());
    }

    public function testSub() {
        $contains = "hello test";
        $render = sprintf("<sub>%s</sub>", $contains);
        $this->assertSame((new MyTags\Sub())->contains($contains)->render(), $render);
        $this->assertSame((new MyTags\Sub($contains))->render(), $render);
        $this->assertSame((new MyTags\Sub($contains))->render(), Tags::Sub($contains)->render());
    }

    public function testSup() {
        $contains = "hello test";
        $render = sprintf("<sup>%s</sup>", $contains);
        $this->assertSame((new MyTags\Sup())->contains($contains)->render(), $render);
        $this->assertSame((new MyTags\Sup($contains))->render(), $render);
        $this->assertSame((new MyTags\Sup($contains))->render(), Tags::Sup($contains)->render());
    }

    public function testU() {
        $contains = "hello test";
        $render = sprintf("<u>%s</u>", $contains);
        $this->assertSame((new MyTags\U())->contains($contains)->render(), $render);
        $this->assertSame((new MyTags\U($contains))->render(), $render);
        $this->assertSame((new MyTags\U($contains))->render(), Tags::U($contains)->render());
    }

    public function testTime() {
        $datetime = "01";
        $contains = "hello test";
        $render = sprintf('<time datetime="%s">%s</time>', $datetime, $contains);
        $this->assertSame((new MyTags\Time())->contains($contains)->datetime($datetime)->render(), $render);
        $this->assertSame((new MyTags\Time($datetime, $contains))->render(), $render);
        $this->assertSame((new MyTags\Time($datetime, $contains))->render(), Tags::Time($datetime, $contains)->render());
    }

    public function testVar() {
        $contains = "hello test";
        $render = sprintf("<var>%s</var>", $contains);
        $this->assertSame((new MyTags\VarTag())->contains($contains)->render(), $render);
        $this->assertSame((new MyTags\VarTag($contains))->render(), $render);
        $this->assertSame((new MyTags\VarTag($contains))->render(), Tags::Var($contains)->render());
    }
}