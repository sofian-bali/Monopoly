<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Classes\Property;
use App\Classes\Player;

final class PropertyTest extends TestCase {

    public function testPropertyOwnership(): void {

        $player = new Player("John Doe");
        $rollResult = $player->rollDice();
        echo "Le joueur " . $player->getName() . " a obtenu un résultat de : " . $rollResult;


        $property = new Property("Rue de la Paix", 200);

        $this->assertNull($property->getOwner());

        $property->setOwner($player);

        $this->assertSame($player, $property->getOwner());
    }
}
