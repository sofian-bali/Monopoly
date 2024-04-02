<?php

namespace App\Classes;

use Interface\InterfaceDice;

class Dice implements InterfaceDice {
    
    public int $nb_face;
    public int $value;
    
    public function __construct(int $nb_face = 6)
    {
        $this->nb_face = $nb_face;
    }

    public function roll(): int
    {
        $this->value = random_int(1, $this->nb_face);
        return $this->value;
    }

}