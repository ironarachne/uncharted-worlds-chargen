<?php

namespace App;


class Skill
{
    public $name;
    public $text;

    public function __construct( $name, $text ) {
        $this->name = $name;
        $this->text = $text;
    }
}
