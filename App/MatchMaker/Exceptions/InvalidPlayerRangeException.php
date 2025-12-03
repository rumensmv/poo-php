<?php
declare(strict_types=1);

namespace App\MatchMaker\Exceptions;

use RuntimeException;

class InvalidPlayerRangeException extends RuntimeException
{
    public $message = "La plage du joueur est invalide.";
}
