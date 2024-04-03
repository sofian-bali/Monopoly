<?php

namespace App\Classes;

class CommunityChestCard extends Card {
    public function __construct(string $description) {
        parent::__construct($description);
    }

    public function executeAction(Player $player): void {
        $description = $this->getDescription();
        
        if ($description === "Recevez un héritage de 200€") {
            echo  "$player->getName() a reçu l'héritage et gagne 200€.\n";
            $player->addMoney(200);
        } elseif ($description === "Payez les frais de scolarité de 100€") {
            echo  "$player->getName() doit payer les frais de scolarité de  100€. Il perd 100€.\n";
            $player->removeMoney(100);
        } elseif ($description === "Sortez de prison gratuitement") {
            echo  "$player->getName() est libéré de prison.\n";
            $player->setInPrison();
        }
     
    }

    public function addMoney() {
        
    }
}
