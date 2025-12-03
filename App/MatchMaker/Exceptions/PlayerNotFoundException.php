<?php
declare(strict_types=1);

namespace App\MatchMaker\Exceptions;

use RuntimeException;

class PlayerNotFoundException extends RuntimeException
{
    public $message = "Le joueur n'a pas été trouvé dans le lobby.";
}
