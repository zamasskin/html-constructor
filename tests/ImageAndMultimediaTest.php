<?php
use HtmlConstructor\Tags;
use PHPUnit\Framework\TestCase;

class ImageAndMultimediaTest extends TestCase {
    public function testImgTag() {
        $src ="test.png";
        $alt = "test";
        $render = sprintf('<img src="%s" alt="%s" />', $src, $alt);

        $this->assertSame(
            (new Tags\ImageAndMultimedia\Img())->src($src)->alt($alt)->render(),
            $render
        );
        $this->assertSame(
            (new Tags\ImageAndMultimedia\Img($src, $alt))->render(),
            $render
        );

        $this->assertSame(
            (new Tags\ImageAndMultimedia\Img($src, $alt))->render(),
            Tags::Img($src, $alt)->render()
        );
    }
}