<?php

class htmlBuilder
{
    public function __constructor()
    {
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
        echo $element;
    }
}
