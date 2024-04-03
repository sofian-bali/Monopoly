<?php

namespace App\Classes;

class Property {
    private $name;
    private $price;
    private $owner;

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
        $this->owner = null; 
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPrice(): int {
        return $this->price;
    }

    public function getOwner(): ?Player {
        return $this->owner;
    }

    public function setOwner(?Player $owner): void {
        $this->owner = $owner;
    }
}
