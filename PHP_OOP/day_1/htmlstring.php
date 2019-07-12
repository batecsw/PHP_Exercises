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
    }
    public function getItalicString()
    {
    return "<em>" . $this->string. "</em>";
    }
    public function getBoldItalicString()
    {
    return "<strong><em>" . $this->string. "</strong><em>";
    }
}
