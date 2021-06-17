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

    public function testArea() {
        $shape = "rect";
        $coords = "184,6,253,27";
        $render = sprintf('<area shape="%s" coords="%s" />', $shape, $coords);

        $this->assertSame(
            (new Tags\ImageAndMultimedia\Area())->shape($shape)->coords($coords)->render(),
            $render
        );

        $this->assertSame(
            (new Tags\ImageAndMultimedia\Area())->render(),
            Tags::Area()->render()
        );
    }

    public function testAudio() {
        $src= "t-rex-roar.mp3";
        $render = sprintf('<audio src="%s" controls></audio>', $src);

        $this->assertSame(
            (new Tags\ImageAndMultimedia\Audio())->src($src)->controls()->render(),
            $render
        );

        $this->assertSame(
            (new Tags\ImageAndMultimedia\Audio($src))->controls()->render(),
            $render
        );

        $this->assertSame(
            (new Tags\ImageAndMultimedia\Audio($src))->render(),
            Tags::Audio($src)->render()
        );
    }

    public function testVideo() {
        $src= "t-rex-roar.mp3";
        $render = sprintf('<video src="%s" controls></video>', $src);

        $this->assertSame(
            (new Tags\ImageAndMultimedia\Video())->src($src)->controls()->render(),
            $render
        );

        $this->assertSame(
            (new Tags\ImageAndMultimedia\Video($src))->controls()->render(),
            $render
        );

        $this->assertSame(
            (new Tags\ImageAndMultimedia\Video($src))->render(),
            Tags::Video($src)->render()
        );
    }

    public function testMap() {
        $name = "infographic";
        $render = sprintf('<map name="%s"></map>', $name);

        $this->assertSame(
            (new Tags\ImageAndMultimedia\Map())->name($name)->render(),
            $render
        );

        $this->assertSame(
            (new Tags\ImageAndMultimedia\Map($name))->render(),
            $render
        );

        $this->assertSame(
            (new Tags\ImageAndMultimedia\Map($name))->render(),
            Tags::Map($name)->render()
        );
    }

    public function testTrack() {
        $kind = "captions";
        $render = sprintf('<track kind="%s" default />', $kind);

        $this->assertSame(
            (new Tags\ImageAndMultimedia\Track())->kind($kind)->default()->render(),
            $render
        );

        $this->assertSame(
            (new Tags\ImageAndMultimedia\Track())->render(),
            Tags::Track()->render()
        );
    }
}