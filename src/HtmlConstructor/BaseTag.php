<?php

namespace HtmlConstructor;

abstract class BaseTag implements Tag {
    protected $arParams = array(
        "attributes" => array()
    );

    protected function check($name) {
        return $name !== false && $name !== NULL;
    }

    static $ON_ABORT = "onabort";
    static $ON_AUTOCOMPLETE = "onautocomplete";
    static $ON_AUTOCOMPLETEERROR = "onautocompleteerror";
    static $ON_BLUR = "onblur";
    static $ON_CANCEL = "oncancel";
    static $ON_CANPLAY = "oncanplay";
    static $ON_CANPLAYTHROUGH = "oncanplaythrough";
    static $ON_CHANGE = "onchange";
    static $ON_CLICK = "onclick";
    static $ON_CLOSE = "onclose";
    static $ON_CONTEXTMENU = "oncontextmenu";
    static $ON_CUECHANGE = "oncuechange";
    static $ON_DBLCLICK = "ondblclick";
    static $ON_DRAG = "ondrag";
    static $ON_DRAGEND = "ondragend";
    static $ON_DRAGENTER = "ondragenter";
    static $ON_DRAGEXIT = "ondragexit";
    static $ON_DRAGLEAVE = "ondragleave";
    static $ON_DRAGOVER = "ondragover";
    static $ON_DRAGSTART = "ondragstart";
    static $ON_DROP = "ondrop";
    static $ON_DURATIONCHANGE = "ondurationchange";
    static $ON_EMPTIED = "onemptied";
    static $ON_ENDED = "onended";
    static $ON_ERROR = "onerror";
    static $ON_FOCUS = "onfocus";
    static $ON_INPUT = "oninput";
    static $ON_INVALID = "oninvalid";
    static $ON_KEYDOWN = "onkeydown";
    static $ON_KEYPRESS = "onkeypress";
    static $ON_KEYUP = "onkeyup";
    static $ON_LOAD = "onload";
    static $ON_LOADEDDATA = "onloadeddata";
    static $ON_LOADEDMETADATA = "onloadedmetadata";
    static $ON_LOADSTART = "onloadstart";
    static $ON_MOUSEDOWN = "onmousedown";
    static $ON_MOUSEENTER = "onmouseenter";
    static $ON_MOUSELEAVE = "onmouseleave";
    static $ON_MOUSEMOVE = "onmousemove";
    static $ON_MOUSEOUT = "onmouseout";
    static $ON_MOUSEOVER = "onmouseover";
    static $ON_MOUSEUP = "onmouseup";
    static $ON_MOUSEWHEEL = "onmousewheel";
    static $ON_PAUSE = "onpause";
    static $ON_PLAY = "onplay";
    static $ON_PLAYING = "onplaying";
    static $ON_PROGRESS = "onprogress";
    static $ON_RATECHANGE = "onratechange";
    static $ON_RESET = "onreset";
    static $ON_RESIZE = "onresize";
    static $ON_SCROLL = "onscroll";
    static $ON_SEEKED = "onseeked";
    static $ON_SEEKING = "onseeking";
    static $ON_SELECT = "onselect";
    static $ON_SHOW = "onshow";
    static $ON_SORT = "onsort";
    static $ON_STALLED = "onstalled";
    static $ON_SUBMIT = "onsubmit";
    static $ON_SUSPEND = "onsuspend";
    static $ON_TIMEUPDATE = "ontimeupdate";
    static $ON_TOGGLE = "ontoggle";
    static $ON_VOLUMECHANGE = "onvolumechange";
    static $ON_WAITING = "onwaiting";


    /**
     * Set class name
     * @param string $name
     * @return $this
     */
    function className($name) {
        $this->arParams["attributes"]["class"] = $name;
        return $this;
    }

    /**
     * Set styles
     * @param string $style
     * @return $this
     */
    function style($style) {
        $this->arParams["attributes"]["style"] = $style;
        return $this;
    }

    /**
     * Events
     * @param self::$ON_*|string $name
     * @param $value
     * @return $this
     */
    function on($name, $value) {
        $this->arParams["attributes"][$name] = $value;
        return $this;
    }


    /**
     * Set Attribute
     * @param string $name
     * @param string $value
     * @return $this
     */
    function setAttribute($name,  $value) {
        $this->arParams["attributes"][$name] = $value;
        return $this;
    }


    /**
     * Generate attribute
     * @param $name attrubute name
     * @param $value attrubute value
     * @return string attribute string
     */
    private function mapAttribute($name, $value) {
        return $value !== NULL ?  implode("", [$name, '=', '"', $value, '"']) : $name;
    }

    /**
     * Generate Attributes
     * @return string attributes string
     */
    protected function getAttributesString() {
        $attributes = array_map(
            array($this, "mapAttribute"),
            array_keys($this->arParams["attributes"]),
            array_values($this->arParams["attributes"])
        );
        return implode(" ", $attributes);
    }

    /**
     * Render HTML element
     * @return string HTML string
     */
    function render() {
        $items = [$this->getName()];
        if($this->arParams["attributes"] && count($this->arParams["attributes"]) > 0) {
            $items[] = $this->getAttributesString();
        }
        return "<" . implode(" ", $items) . " />";
    }
}