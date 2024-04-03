<?php

namespace App\Classes;

class ChanceCard extends Card {
    public function __construct(string $description) {
        parent::__construct($description);
    }

    public function executeAction(Player $player): void {
        $description = $this->getDescription();
        
        if ($description === "Avancez de 3 cases") {
            $player->moveForward(3);
            echo  "Le joueur a avancé de 3 cases.\n";
        } elseif ($description === "Retournez à la case Départ") {
            $player->goBackToStart();
            echo  "Le joueur est revenu à la case Départ.\n";
        } elseif ($description === "Payez une amende de 50€") {
            $player->payFine(50);
            echo  "Vous avez payé une amende de 50 €. Votre solde : -50 €.\n";
        }
     
    }
}
