<?php


/**
 * Class HtmlBuilder
 * @todo
 * 1. Учитывать закрывающийся тэг (одиночный тэг)
 * 2. Реализовать вложенность элементов
 */

class FormBuilder
{
    protected $method = '';
    protected $action = '';
    public function __construct($method, $action)
    {
        $this->method = $method;
        $this->action = $action;
    }

    public function getForm
    {
        $form = '<form method =" ' . $this->method . '" action =" ' . $this->action . '" /form>';
    }

    public function createInput($type)
    {
        $input = '<input type="' . $type . '">'
    }

    /**
     * @param $element
     */
    protected function addHtml($element)
    {
        $this->html .= $element . PHP_EOL;
    }


    /**
     * @param $elementName
     * @param string $content
     * @param array $attr
     */
    public function createElement($elementName, $content = '', $attr = [])
    {
        $attrString = '';

        if (!empty($attr) && is_array($attr)) {
            foreach ($attr as $name => $value) {
                $attrString .= $name . '="' . $value . '" ';
            }
        }

        $element = '<' . $elementName . ' ' . $attrString . '>' . $content . '</' . $elementName . '>';
        $this->addHtml($element);
    }


    public function getHtml()
    {
        echo $this->html;
    }
}
