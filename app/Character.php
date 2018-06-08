<?php

namespace App;


class Character
{
    public $skills;
    public $descriptors;

    public $mettle;
    public $physique;
    public $expertise;
    public $influence;
    public $interface;

    public $origin;

    public $careerOne;
    public $careerTwo;

    public $assets;

    public function __construct() {
        $this->skills = [];
    }

}
