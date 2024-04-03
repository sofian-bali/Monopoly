<?php

namespace App\Classes;

class Card {
    protected string $description;

    public function __construct(string $description) {
        $this->description = $description;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function executeAction(Player $player): void {
        // Méthode générique pour exécuter une action de carte
        // Cette méthode peut être surchargée dans les sous-classes pour implémenter des actions spécifiques
    }
}
