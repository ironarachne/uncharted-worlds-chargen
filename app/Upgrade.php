<?php

namespace App;


class Upgrade
{
    public $name;
    public $effect;

    public function __construct( $name, $effect ) {
        $this->name = $name;
        $this->effect = $effect;
    }
}
