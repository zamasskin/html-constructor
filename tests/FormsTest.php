<?php
use HtmlConstructor\Tags;
use PHPUnit\Framework\TestCase;

class FormsTest extends TestCase {
    public function testForm() {
        $method =  Tags\Forms\Form::$METHOD_GET;
        $action = "example.com";
        $render = sprintf('<form action="%s" method="%s"></form>', $action, $method);
        $this->assertSame(
            (new Tags\Forms\Form())->action($action)->method($method)->render(),
            $render
        );
        $this->assertSame(
            (new Tags\Forms\Form($action, $method))->render(),
            $render
        );
        $this->assertSame(
            (new Tags\Forms\Form($action, $method))->render(),
            Tags::Form($action, $method)->render()
        );
    }
}