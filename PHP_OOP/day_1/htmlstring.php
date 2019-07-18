<?php

class HtmlString {
    public function __construct($string)
    {
    $this->string = $string;
    }

    private $string;

    public function setString($string)
    {
    $this->string = $string;
    }
    public function getString()
    {
    return $this->string;
    }
    public function getBoldString()
    {
    return "<strong>" . $this->string. "</strong>";
    // can also use <b> tag
    }
    public function getItalicString()
    {
    return "<em>" . $this->string. "</em>";
    // can also use <i> tag
    }
    public function getBoldItalicString()
    {
    return "<strong><em>" . $this->string. "</strong><em>";
    }
}
