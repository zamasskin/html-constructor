<?php
use HtmlConstructor\Tags;
use PHPUnit\Framework\TestCase;


class TagTest extends TestCase {
    public function testHtml() {
        $lang = "en";
        $render = sprintf('<html lang="%s"></html>', $lang);
        $this->assertSame(
            (new Tags\Html())->lang($lang)->render(),
            $render
        );

        $this->assertSame(
            (new Tags\Html())->lang($lang)->render(),
            Tags::Html()->lang($lang)->render()
        );
    }

    public function testBody() {
        $lang = "en";
        $render = '<body></body>';
        $this->assertSame(
            (new Tags\Body())->render(),
            $render
        );

        $this->assertSame(
            (new Tags\Body())->render(),
            Tags::Body()->render()
        );
    }

    public function testTag() {
        $data = "test";
        $render = sprintf('<custom data="%s"></custom>', $data);
        $this->assertSame(
            (new Tags\Tag("custom"))->setAttribute("data", $data)->render(),
            $render
        );

        $this->assertSame(
            (new Tags\Tag("custom"))->setAttribute("data", $data)->render(),
            Tags::Tag("custom")->setAttribute("data", $data)->render()
        );
    }

}