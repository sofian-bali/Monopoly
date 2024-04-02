<?php

namespace Classes;

use Interface\InterfaceDice;

class Dice {
    
    private int $value;

    public function get_value() {
        return $this->value;
    }

    public function set_value($nv) {
        if($nv >= 1 && $nv <= 6) {
            return $this->value = $nv;
        } else {
            return "mescouilles";
        }
    }

}