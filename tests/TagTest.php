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

    public function testAddress() {
        $render = '<address></address>';
        $this->assertSame(
            (new Tags\ContentSectioning\Address())->render(),
            $render
        );
        $this->assertSame(
            (new Tags\ContentSectioning\Address())->render(),
            Tags::Address()->render()
        );
    }

    public function testArticle() {
        $render = '<article></article>';
        $this->assertSame(
            (new Tags\ContentSectioning\Article())->render(),
            $render
        );
        $this->assertSame(
            (new Tags\ContentSectioning\Article())->render(),
            Tags::Article()->render()
        );
    }

    public function testAside() {
        $render = '<aside></aside>';
        $this->assertSame(
            (new Tags\ContentSectioning\Aside())->render(),
            $render
        );
        $this->assertSame(
            (new Tags\ContentSectioning\Aside())->render(),
            Tags::Aside()->render()
        );
    }

    public function testFooter() {
        $render = '<footer></footer>';
        $this->assertSame(
            (new Tags\ContentSectioning\Footer())->render(),
            $render
        );
        $this->assertSame(
            (new Tags\ContentSectioning\Footer())->render(),
            Tags::Footer()->render()
        );
    }

    public function testHeader() {
        $render = '<header></header>';
        $this->assertSame(
            (new Tags\ContentSectioning\Header())->render(),
            $render
        );
        $this->assertSame(
            (new Tags\ContentSectioning\Header())->render(),
            Tags::Header()->render()
        );
    }

    public function testMain() {
        $render = '<main></main>';
        $this->assertSame(
            (new Tags\ContentSectioning\Main())->render(),
            $render
        );
        $this->assertSame(
            (new Tags\ContentSectioning\Main())->render(),
            Tags::Main()->render()
        );
    }

    public function testNav() {
        $render = '<nav></nav>';
        $this->assertSame(
            (new Tags\ContentSectioning\Nav())->render(),
            $render
        );
        $this->assertSame(
            (new Tags\ContentSectioning\Nav())->render(),
            Tags::Nav()->render()
        );
    }

    public function testSection() {
        $render = '<section></section>';
        $this->assertSame(
            (new Tags\ContentSectioning\Section())->render(),
            $render
        );
        $this->assertSame(
            (new Tags\ContentSectioning\Section())->render(),
            Tags::Section()->render()
        );
    }

    public function testH1() {
        $render = '<h1></h1>';
        $this->assertSame((new Tags\ContentSectioning\H1())->render(), $render);
        $this->assertSame((new Tags\ContentSectioning\H1())->render(), Tags::H1()->render());
    }

    public function testH2() {
        $render = '<h2></h2>';
        $this->assertSame((new Tags\ContentSectioning\H2())->render(), $render);
        $this->assertSame((new Tags\ContentSectioning\H2())->render(), Tags::H2()->render());
    }

    public function testH3() {
        $render = '<h3></h3>';
        $this->assertSame((new Tags\ContentSectioning\H3())->render(), $render);
        $this->assertSame((new Tags\ContentSectioning\H3())->render(), Tags::H3()->render());
    }

    public function testH4() {
        $render = '<h4></h4>';
        $this->assertSame((new Tags\ContentSectioning\H4())->render(), $render);
        $this->assertSame((new Tags\ContentSectioning\H4())->render(), Tags::H4()->render());
    }

    public function testH5() {
        $render = '<h5></h5>';
        $this->assertSame((new Tags\ContentSectioning\H5())->render(), $render);
        $this->assertSame((new Tags\ContentSectioning\H5())->render(), Tags::H5()->render());
    }

    public function testH6() {
        $render = '<h6></h6>';
        $this->assertSame((new Tags\ContentSectioning\H6())->render(), $render);
        $this->assertSame((new Tags\ContentSectioning\H6())->render(), Tags::H6()->render());
    }


    public function testDivTag() {
        $html = (new Tags\TextContent\Div())
            ->style("color: red; background: #000")
            ->className("parent")
            ->children([
                (new Tags\TextContent\Div())->className("one"),
                (new Tags\TextContent\Div())->className("two"),
            ]);
        $render = '<div style="color: red; background: #000" class="parent"><div class="one"></div><div class="two"></div></div>';
        $this->assertSame($html->render(), $render);
        $this->assertSame((new Tags\TextContent\Div())->render(), Tags::Div()->render());
    }

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


    public function testBaseTag() {
        $href = "/test/";
        $target = Tags\Metadata\Base::$TARGET_BLANK;
        $render = sprintf('<base href="%s" target="%s" />', $href, $target);
        $this->assertSame(
            (new Tags\Metadata\Base())->href($href)->target($target)->render(),
            $render
        );
        $this->assertSame(
            (new Tags\Metadata\Base($href))->target($target)->render(),
            $render
        );

        $this->assertSame(
            (new Tags\Metadata\Base($href))->render(),
            Tags::Base($href)->render()
        );
    }

    public function testLinkTag() {
        $href = "example.css";
        $rel = "stylesheet";
        $render = sprintf('<link href="%s" rel="%s" />', $href, $rel);
        $this->assertSame(
            (new Tags\Metadata\Link())->href($href)->rel($rel)->render(),
            $render
        );

        $this->assertSame(
            (new Tags\Metadata\Link($href, $rel))->render(),
            $render
        );

        $this->assertSame(
            (new Tags\Metadata\Link($href, $rel))->render(),
            Tags::Link($href, $rel)->render()
        );
    }
}