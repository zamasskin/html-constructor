<?php
use HtmlConstructor\Tags;
use PHPUnit\Framework\TestCase;

class ScriptingTest extends TestCase{
    public function testScript() {
        $contains = "alert('Hello world')";
        $type = "javascript";
        $render = sprintf('<script type="%s">%s</script>', $type, $contains);
        $this->assertSame(
            (new Tags\Scripting\Script())->type($type)->contains($contains)->render(),
            $render
        );

        $this->assertSame(
            (new Tags\Scripting\Script())->type($type)->contains($contains)->render(),
            Tags::Script()->type($type)->contains($contains)->render()
        );
    }

    public function testNoscript() {
        $render = '<noscript></noscript>';
        $this->assertSame(
            (new Tags\Scripting\Noscript())->render(),
            $render
        );
        $this->assertSame(
            (new Tags\Scripting\Noscript())->render(),
            Tags::Noscript()->render()
        );
    }

    public function testCanvas() {
        $width = "100%";
        $height = 50;
        $render = sprintf('<canvas width="%s" height="%d"></canvas>', $width, $height);
        $this->assertSame(
            (new Tags\Scripting\Canvas())->width($width)->height($height)->render(),
            $render
        );
        $this->assertSame(
            (new Tags\Scripting\Canvas())->render(),
            Tags::Canvas()->render()
        );
    }


}