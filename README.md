# html-constructor
Instead of writing HTML or using an HTML templating engine, 
you compose your layout using PHP structures with the dash-html-components library.

## Installation
Install [composer](https://getcomposer.org/).

Run the following in the root of your project:

```bash
composer require zamasskin/html-constructor dev-main
```
Or, create a composer.json file with the following contents and run "composer install":
```json
{
  "require": {
    "zamasskin/html-constructor": "dev-main"
  }
}
```

## Usage
```php
<?php
use HtmlConstructor\Tags;
require_once "vendor/autoload.php";
$html = (new Tags\TextContent\Div())
            ->style("color: red; background: #000")
            ->className("parent")
            ->children([
                (new Tags\TextContent\Div())->className("one"),
                (new Tags\TextContent\Div())->className("two"),
            ]);
echo $html->render();
// <div style="color: red; background: #000" class="parent"><div class="one"></div><div class="two"></div></div>


$html = Tags::Div()->className("root")->children([
    Tags::Span('main caption')->className("caption"),
    Tags::A('http://example.com', 'main link')->className("link")
]);
echo $html->render();
// <div class="root"><span class="caption">main caption</span><a href="http://example.com" class="link">main link</a></div>



$html = (new Tags\Tag("custom"))->setAttribute("data", "test");
echo $html->render();
// <custom data="%test"></custom>

$html = Tags::Tag("custom")->setAttribute("data", "test");
echo $html->render();
// <custom data="%test"></custom>
```