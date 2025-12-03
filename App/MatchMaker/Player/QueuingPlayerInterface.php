<?php
declare(strict_types=1);

namespace App\MatchMaker\Player;

interface QueuingPlayerInterface
{
    public function getRange(): int;
    public function upgradeRange(): void;
    public function getName(): string;
    public function getRatio(): float;
    public function updateRatioAgainst(AbstractPlayer $player, int $result): void;
}