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
}