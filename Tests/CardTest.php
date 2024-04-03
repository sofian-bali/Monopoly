<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Classes\Player;
use App\Classes\Card;
use App\Classes\ChanceCard;
use App\Classes\CommunityChestCard;

final class CardTest extends TestCase {
    
    public function testChanceCardActions(): void {
        $player = new Player("Sofian");

        $chanceCard = new ChanceCard("Avancez de 3 cases");
        $chanceCard->executeAction($player);
        $this->assertEquals( $player->getCurrentPosition()); 

    }

    public function testCommunityChestCardActions(): void {
        $player = new Player("Sofian");

        $communityChestCard = new CommunityChestCard("Recevez un héritage de 200€");
        $communityChestCard->executeAction($player);

        $this->assertEquals( $player->getMoney()); 

    }
}
