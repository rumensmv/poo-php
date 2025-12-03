<?php

/*
 * This file is part of the OpenClassRoom PHP Object Course.
 *
 * (c) Grégoire Hébert <contact@gheb.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

spl_autoload_register(static function(string $fqcn) {
    $path = str_replace('\\', '/', $fqcn) . '.php';
    require_once $path;
}); 

use App\MatchMaker\Lobby;
use App\MatchMaker\BlitzPlayer;

$greg = new BlitzPlayer('greg');
$jade = new BlitzPlayer('jade');

$lobby = new Lobby();
$lobby->addPlayers($greg, $jade);

var_dump($lobby->findOponents($lobby->queuingPlayers[0]));


