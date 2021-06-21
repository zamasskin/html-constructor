<?php

namespace HtmlConstructor;
use HtmlConstructor\Tags as HtmlTags;
use HtmlConstructor\Traits\Tags as TraitTags;

class Tags {
    use TraitTags\Metadata;
    use TraitTags\ContentSectioning;
    use TraitTags\TextContent;
    use TraitTags\InlineTextSemantics;
    use TraitTags\ImageAndMultimedia;
    use TraitTags\EmbeddedContent;
    use TraitTags\TableContent;
    use TraitTags\Forms;

    static function Html() {
        return new HtmlTags\Html();
    }

    static function Body() {
        return new HtmlTags\Body();
    }
}