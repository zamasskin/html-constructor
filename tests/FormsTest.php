<?php
use HtmlConstructor\Tags;
use PHPUnit\Framework\TestCase;
use HtmlConstructor\Tags\Forms\Input;
use  HtmlConstructor\TagsInput;

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


    public function testInputButton() {
        $name = "name";
        $value = "value";
        $render = sprintf('<input type="button" name="%s" value="%s" />', $name, $value);
        $this->assertSame((new Input\Button())->name($name)->value($value)->render(), $render);
        $this->assertSame((new Input\Button($name, $value))->render(), $render);
        $this->assertSame((new Input\Button($name, $value))->render(), TagsInput::Button($name, $value)->render());
    }

    public function testInputCheckbox() {
        $name = "name";
        $value = "value";
        $render = sprintf('<input type="checkbox" name="%s" value="%s" />', $name, $value);
        $this->assertSame((new Input\Checkbox())->name($name)->value($value)->render(), $render);
        $this->assertSame((new Input\Checkbox($name, $value))->render(), $render);
        $this->assertSame((new Input\Checkbox($name, $value))->render(), TagsInput::Checkbox($name, $value)->render());
    }

    public function testInputColor() {
        $name = "name";
        $value = "value";
        $render = sprintf('<input type="color" name="%s" value="%s" />', $name, $value);
        $this->assertSame((new Input\Color())->name($name)->value($value)->render(), $render);
        $this->assertSame((new Input\Color($name, $value))->render(), $render);
        $this->assertSame((new Input\Color($name, $value))->render(), TagsInput::Color($name, $value)->render());
    }

    public function testInputDate() {
        $name = "name";
        $value = "value";
        $render = sprintf('<input type="date" name="%s" value="%s" />', $name, $value);
        $this->assertSame((new Input\Date())->name($name)->value($value)->render(), $render);
        $this->assertSame((new Input\Date($name, $value))->render(), $render);
        $this->assertSame((new Input\Date($name, $value))->render(), TagsInput::Date($name, $value)->render());
    }

    public function testInputDatetime() {
        $name = "name";
        $value = "value";
        $render = sprintf('<input type="datetime" name="%s" value="%s" />', $name, $value);
        $this->assertSame((new Input\Datetime())->name($name)->value($value)->render(), $render);
        $this->assertSame((new Input\Datetime($name, $value))->render(), $render);
        $this->assertSame((new Input\Datetime($name, $value))->render(), TagsInput::Datetime($name, $value)->render());
    }

    public function testInputDatetimeLocal() {
        $name = "name";
        $value = "value";
        $render = sprintf('<input type="datetime-local" name="%s" value="%s" />', $name, $value);
        $this->assertSame((new Input\DatetimeLocal())->name($name)->value($value)->render(), $render);
        $this->assertSame((new Input\DatetimeLocal($name, $value))->render(), $render);
        $this->assertSame((new Input\DatetimeLocal($name, $value))->render(), TagsInput::DatetimeLocal($name, $value)->render());
    }

    public function testInputEmail() {
        $name = "name";
        $value = "value";
        $render = sprintf('<input type="email" name="%s" value="%s" />', $name, $value);
        $this->assertSame((new Input\Email())->name($name)->value($value)->render(), $render);
        $this->assertSame((new Input\Email($name, $value))->render(), $render);
        $this->assertSame((new Input\Email($name, $value))->render(), TagsInput::Email($name, $value)->render());
    }

    public function testInputFile() {
        $name = "name";
        $value = "value";
        $render = sprintf('<input type="file" name="%s" value="%s" />', $name, $value);
        $this->assertSame((new Input\File())->name($name)->value($value)->render(), $render);
        $this->assertSame((new Input\File($name, $value))->render(), $render);
        $this->assertSame((new Input\File($name, $value))->render(), TagsInput::File($name, $value)->render());
    }

    public function testInputHidden() {
        $name = "name";
        $value = "value";
        $render = sprintf('<input type="hidden" name="%s" value="%s" />', $name, $value);
        $this->assertSame((new Input\Hidden())->name($name)->value($value)->render(), $render);
        $this->assertSame((new Input\Hidden($name, $value))->render(), $render);
        $this->assertSame((new Input\Hidden($name, $value))->render(), TagsInput::Hidden($name, $value)->render());
    }

    public function testInputImage() {
        $name = "name";
        $value = "value";
        $render = sprintf('<input type="image" name="%s" value="%s" />', $name, $value);
        $this->assertSame((new Input\Image())->name($name)->value($value)->render(), $render);
        $this->assertSame((new Input\Image($name, $value))->render(), $render);
        $this->assertSame((new Input\Image($name, $value))->render(), TagsInput::Image($name, $value)->render());
    }

    public function testInputMonth() {
        $name = "name";
        $value = "value";
        $render = sprintf('<input type="month" name="%s" value="%s" />', $name, $value);
        $this->assertSame((new Input\Month())->name($name)->value($value)->render(), $render);
        $this->assertSame((new Input\Month($name, $value))->render(), $render);
        $this->assertSame((new Input\Month($name, $value))->render(), TagsInput::Month($name, $value)->render());
    }

    public function testInputNumber() {
        $name = "name";
        $value = "value";
        $render = sprintf('<input type="number" name="%s" value="%s" />', $name, $value);
        $this->assertSame((new Input\Number())->name($name)->value($value)->render(), $render);
        $this->assertSame((new Input\Number($name, $value))->render(), $render);
        $this->assertSame((new Input\Number($name, $value))->render(), TagsInput::Number($name, $value)->render());
    }

    public function testInputPassword() {
        $name = "name";
        $value = "value";
        $render = sprintf('<input type="password" name="%s" value="%s" />', $name, $value);
        $this->assertSame((new Input\Password())->name($name)->value($value)->render(), $render);
        $this->assertSame((new Input\Password($name, $value))->render(), $render);
        $this->assertSame((new Input\Password($name, $value))->render(), TagsInput::Password($name, $value)->render());
    }

    public function testInputRadio() {
        $name = "name";
        $value = "value";
        $render = sprintf('<input type="radio" name="%s" value="%s" />', $name, $value);
        $this->assertSame((new Input\Radio())->name($name)->value($value)->render(), $render);
        $this->assertSame((new Input\Radio($name, $value))->render(), $render);
        $this->assertSame((new Input\Radio($name, $value))->render(), TagsInput::Radio($name, $value)->render());
    }

    public function testInputRange() {
        $name = "name";
        $value = "value";
        $render = sprintf('<input type="range" name="%s" value="%s" />', $name, $value);
        $this->assertSame((new Input\Range())->name($name)->value($value)->render(), $render);
        $this->assertSame((new Input\Range($name, $value))->render(), $render);
        $this->assertSame((new Input\Range($name, $value))->render(), TagsInput::Range($name, $value)->render());
    }

    public function testInputReset() {
        $name = "name";
        $render = sprintf('<input type="reset" name="%s" />', $name);
        $this->assertSame((new Input\Reset())->name($name)->render(), $render);
        $this->assertSame((new Input\Reset($name))->render(), $render);
        $this->assertSame((new Input\Reset($name))->render(), TagsInput::Reset($name)->render());
    }

    public function testInputSearch() {
        $name = "name";
        $value = "value";
        $render = sprintf('<input type="search" name="%s" value="%s" />', $name, $value);
        $this->assertSame((new Input\Search())->name($name)->value($value)->render(), $render);
        $this->assertSame((new Input\Search($name, $value))->render(), $render);
        $this->assertSame((new Input\Search($name, $value))->render(), TagsInput::Search($name, $value)->render());
    }

    public function testInputSubmit() {
        $name = "name";
        $value = "value";
        $render = sprintf('<input type="submit" name="%s" value="%s" />', $name, $value);
        $this->assertSame((new Input\Submit())->name($name)->value($value)->render(), $render);
        $this->assertSame((new Input\Submit($name, $value))->render(), $render);
        $this->assertSame((new Input\Submit($name, $value))->render(), TagsInput::Submit($name, $value)->render());
    }

    public function testInputTel() {
        $name = "name";
        $value = "value";
        $render = sprintf('<input type="tel" name="%s" value="%s" />', $name, $value);
        $this->assertSame((new Input\Tel())->name($name)->value($value)->render(), $render);
        $this->assertSame((new Input\Tel($name, $value))->render(), $render);
        $this->assertSame((new Input\Tel($name, $value))->render(), TagsInput::Tel($name, $value)->render());
    }

    public function testInputText() {
        $name = "name";
        $value = "value";
        $render = sprintf('<input type="text" name="%s" value="%s" />', $name, $value);
        $this->assertSame((new Input\Text())->name($name)->value($value)->render(), $render);
        $this->assertSame((new Input\Text($name, $value))->render(), $render);
        $this->assertSame((new Input\Text($name, $value))->render(), TagsInput::Text($name, $value)->render());
    }

    public function testInputTime() {
        $name = "name";
        $value = "value";
        $render = sprintf('<input type="time" name="%s" value="%s" />', $name, $value);
        $this->assertSame((new Input\Time())->name($name)->value($value)->render(), $render);
        $this->assertSame((new Input\Time($name, $value))->render(), $render);
        $this->assertSame((new Input\Time($name, $value))->render(), TagsInput::Time($name, $value)->render());
    }

    public function testInputUrl() {
        $name = "name";
        $value = "value";
        $render = sprintf('<input type="url" name="%s" value="%s" />', $name, $value);
        $this->assertSame((new Input\Url())->name($name)->value($value)->render(), $render);
        $this->assertSame((new Input\Url($name, $value))->render(), $render);
        $this->assertSame((new Input\Url($name, $value))->render(), TagsInput::Url($name, $value)->render());
    }

    public function testInputWeek() {
        $name = "name";
        $value = "value";
        $render = sprintf('<input type="week" name="%s" value="%s" />', $name, $value);
        $this->assertSame((new Input\Week())->name($name)->value($value)->render(), $render);
        $this->assertSame((new Input\Week($name, $value))->render(), $render);
        $this->assertSame((new Input\Week($name, $value))->render(), TagsInput::Week($name, $value)->render());
    }

    public function testButton() {
        $contains = "click me";
        $name = "myButton";
        $type = Tags\Forms\Button::$TYPE_SUBMIT;
        $render = sprintf('<button name="%s" type="%s">%s</button>', $name, $type, $contains);
        $this->assertSame((new Tags\Forms\Button())->name($name)->type($type)->contains($contains)->render(), $render);
        $this->assertSame((new Tags\Forms\Button($name, $contains))->type($type)->render(), $render);
        $this->assertSame(
            (new Tags\Forms\Button($name, $contains))->render(),
            Tags::Button($name, $contains)->render()
        );
    }

    public function testDatalist() {
        $render = "<datalist></datalist>";
        $this->assertSame((new Tags\Forms\Datalist())->render(), $render);
        $this->assertSame((new Tags\Forms\Datalist())->render(), Tags::Datalist()->render());
    }

    public function testFieldset() {
        $render = "<fieldset></fieldset>";
        $this->assertSame((new Tags\Forms\Fieldset())->render(), $render);
        $this->assertSame((new Tags\Forms\Fieldset())->render(), Tags::Fieldset()->render());
    }

    public function testLabel() {
        $for = "customId";
        $render = sprintf('<label for="%s"></label>', $for);
        $this->assertSame((new Tags\Forms\Label())->for($for)->render(), $render);
        $this->assertSame((new Tags\Forms\Label())->render(), Tags::Label()->render());
    }

    public function testLegend() {
        $contains = "click me";
        $render = sprintf('<legend>%s</legend>', $contains);
        $this->assertSame((new Tags\Forms\Legend())->contains($contains)->render(), $render);
        $this->assertSame((new Tags\Forms\Legend($contains))->render(), $render);
        $this->assertSame((new Tags\Forms\Legend($contains))->render(), Tags::Legend($contains)->render());
    }

    public function testMeter() {
        $value = "customId";
        $min = 1;
        $max = 100;
        $render = sprintf('<meter value="%s" min="%d" max="%d"></meter>', $value, $min, $max);
        $this->assertSame(
            (new Tags\Forms\Meter())->value($value)->min($min)->max($max)->render(),
            $render
        );
        $this->assertSame((new Tags\Forms\Meter($value))->min($min)->max($max)->render(), $render);
        $this->assertSame(
            (new Tags\Forms\Meter($value))->min($min)->max($max)->render(),
            Tags::Meter($value)->min($min)->max($max)->render()
        );
    }

}