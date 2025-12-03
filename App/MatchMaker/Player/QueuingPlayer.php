<?php
declare(strict_types=1);

namespace App\MatchMaker\Player;

class QueuingPlayer implements QueuingPlayerInterface
{
    protected int $range = 1;
    protected Player $player;

    public function __construct(Player $player)
    {
       $this->player = $player;
    }

    public function getRange(): int
    {
        return $this->range;
    }

    public function upgradeRange(): void
    {
        $this->range = min($this->range + 1, 40);
    }

    public function getName(): string
    {
        return $this->player->getName();
    }

    public function getRatio(): float
    {
        return $this->player->getRatio();
    }

    public function updateRatioAgainst(AbstractPlayer $player, int $result): void
    {
        $this->player->updateRatioAgainst($player, $result);
    }

    protected function probabilityAgainst(AbstractPlayer $player): float
    {
        return $this->player->probabilityAgainst($player);
    }
}