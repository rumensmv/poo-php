<?php
declare(strict_types=1);

namespace App\MatchMaker\Exceptions;

use RuntimeException;

class LobbyFullException extends RuntimeException
{
    public $message = "Le lobby est complet, impossible d'ajouter ce joueur.";
}
