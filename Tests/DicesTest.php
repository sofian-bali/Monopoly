<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

use App\Classes\Dices;

final class DicesTest extends TestCase {
    public function testResult(): void {
        $dices = new Dices();
        $result = $dices->roll();

        // Assurez-vous que le résultat est un entier compris entre 2 et 12 (la somme de deux dés)
        $this->assertIsInt($result);
        $this->assertGreaterThanOrEqual(2, $result);
        $this->assertLessThanOrEqual(12, $result);
    }

    public function testRoll(): void {
        $dices = new Dices();
        $result = $dices->roll();

        // Assurez-vous que le résultat est un entier compris entre 2 et 12 (la somme de deux dés)
        $this->assertIsInt($result);
        $this->assertGreaterThanOrEqual(2, $result);
        $this->assertLessThanOrEqual(12, $result);
    }

    public function testIsDouble(): void {
        $dices = new Dices();

        // Vérifiez d'abord le cas où les deux dés ont la même valeur (un double)
        $dices->dice1->setValue(3);
        $dices->dice2->setValue(3);
        $this->assertTrue($dices->is_double());

        // Testez ensuite le cas où les deux dés ont des valeurs différentes
        $dices->dice1->setValue(2);
        $dices->dice2->setValue(4);
        $this->assertFalse($dices->is_double());
    }

}