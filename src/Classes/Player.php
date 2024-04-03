<?php

namespace App\Classes;

class Player {
    private $name;
    private $money;
    private $properties;

    public function __construct(string $name, int $money = 1500) {
        if (!is_string($name)) {
            throw new \InvalidArgumentException("Le nom du joueur doit être une chaîne de caractères.");
        }

        $this->name = $name;
        $this->money = $money;
        $this->properties = [];
    }

    public function getName(): string {
        return $this->name;
    }

    public function getMoney(): int {
        return $this->money;
    }

    public function setMoney(int $amount): void {
        $this->money = $amount;
    }

    public function addMoney(int $amount): void {
        $this->money += $amount;
    }

    public function subtractMoney(int $amount): void {
        $this->money -= $amount;
    }

    public function getProperties(): array {
        return $this->properties;
    }

    public function addProperty(Property $property): void {
        $this->properties[] = $property;
    }

    public function removeProperty(Property $property): void {
        foreach ($this->properties as $key => $value) {
            if ($value === $property) {
                unset($this->properties[$key]);
                break;
            }
        }
    }

    public function rollDice(): int {
        $dice1 = random_int(1, 6);
        $dice2 = random_int(1, 6);
        return $dice1 + $dice2;
    }
}
