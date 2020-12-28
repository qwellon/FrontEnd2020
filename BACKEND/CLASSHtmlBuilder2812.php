<?php

class htmlBuilder
{
    protected $html = '';
    public function __constructor()
    {

    }

    protected function addHtml($element)
    {
        $this->html .= $element . PHP_EOL;
    }

    public function createElement($elementName, $content = '', $attr = [])
    {
        $attrString = '';
        if (!empty($attr) && is_array($attr)) {
            foreach ($attr as $name => $value) {
                $attrString .= $name . '="' . $value . '" ';
            }
        }
        var_dump($attrString);
        $element = '<' . $elementName . ' ' . $attrString . '>' . $content . '</' . $elementName . '>';
        $this->addHtml($element);
        public $this->$html;
    }

