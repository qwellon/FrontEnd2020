<?php
class TeamBuilder
{

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function getTeam()
    {
        $team = '<h1 ' . $this->title . ' /h1>';
    }

    public function addMate($name, $secname)
    {
        $mate =  $name  . $secname;
    }


    protected function addHtml($element)
    {
        $this->html .= $element . PHP_EOL;
    }

    public function getHtml()
    {
        echo $this->html;
    }
}
