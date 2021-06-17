<?php
use HtmlConstructor\Tags;
use PHPUnit\Framework\TestCase;

class EmbeddedContentTest extends TestCase {
    public function testEmbed() {
        $type = "video/webm";
        $src = "/media/cc0-videos/flower.mp4";
        $render = sprintf('<embed type="%s" src="%s" />', $type, $src);
        $this->assertSame(
            (new Tags\EmbeddedContent\Embed())->type($type)->src($src)->render(),
            $render
        );

        $this->assertSame(
            (new Tags\EmbeddedContent\Embed())->render(),
            Tags::Embed()->render()
        );
    }

    public function testIframe() {
        $src = "https://www.openstreetmap.org/";
        $render = sprintf('<iframe src="%s"></iframe>', $src);
        $this->assertSame(
            (new Tags\EmbeddedContent\Iframe())->src($src)->render(),
            $render
        );

        $this->assertSame(
            (new Tags\EmbeddedContent\Iframe($src))->render(),
            $render
        );

        $this->assertSame(
            (new Tags\EmbeddedContent\Iframe($src))->render(),
            Tags::Iframe($src)->render()
        );
    }

    public function testParam() {
        $name = "name";
        $value = "value";
        $render = sprintf('<param name="%s" value="%s" />', $name, $value);
        $this->assertSame(
            (new Tags\EmbeddedContent\Param())->name($name)->value($value)->render(),
            $render
        );

        $this->assertSame(
            (new Tags\EmbeddedContent\Param($name, $value))->render(),
            $render
        );

        $this->assertSame(
            (new Tags\EmbeddedContent\Param($name, $value))->render(),
            Tags::Param($name, $value)->render()
        );
    }

    public function testPicture() {
        $render = '<picture></picture>';
        $this->assertSame(
            (new Tags\EmbeddedContent\Picture())->render(),
            $render
        );

        $this->assertSame(
            (new Tags\EmbeddedContent\Picture())->render(),
            Tags::Picture()->render()
        );
    }

    public function testPortal() {
        $src = "https://example.com/";
        $render = sprintf('<portal src="%s"></portal>', $src);

        $this->assertSame(
            (new Tags\EmbeddedContent\Portal())->src($src)->render(),
            $render
        );

        $this->assertSame(
            (new Tags\EmbeddedContent\Portal($src))->render(),
            $render
        );

        $this->assertSame(
            (new Tags\EmbeddedContent\Portal($src))->render(),
            Tags::Portal($src)->render()
        );
    }
}