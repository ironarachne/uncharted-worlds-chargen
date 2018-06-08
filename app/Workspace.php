<?php

namespace App;


class Workspace
{
    public $name;
    public $text;

    public function __construct( $name, $text )
    {
        $this->name = $name;
        $this->text = $text;
    }
}
