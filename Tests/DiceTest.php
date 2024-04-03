<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

use App\Classes\Dice;

final class DiceTest extends TestCase {

    public function testNumberOfFaces(): void
    {
        $dice = new Dice();
        $this->assertSame($dice->getNbFace(), 6);
    }

    public function testDiceCreation(): void
    {
        $dice = new Dice();
        
        $this->assertInstanceOf(Dice::class, $dice);
        
        $this->assertSame(6, $dice->getNbFace());
    }
    
    public function testRoll(): void
    {
        $dice = new Dice();
        $nb = $dice->roll();
        $this->assertTrue( gettype($nb) == "integer" );
        $this->assertTrue( $nb >= 1 && $nb <= $dice->getNbFace() );
        $this->assertTrue($nb == $dice->getValue());
        $base_value = $dice->roll();
        $nb_rounds = 10;
        $result = False;
        while(!$result && $nb_rounds >= 0) {
            $roll_value = $dice->roll();
            $nb_rounds--;
            if($roll_value != $base_value) {
                $result = True;
            }
        }
        $this->assertTrue($result);
    }


}