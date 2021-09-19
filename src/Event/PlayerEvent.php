<?php

namespace Event;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\Server;
use pocketmine\utils\TextFormat;

class PlayerEvent implements Listener{
    public function Join(PlayerJoinEvent $event){
        $player = $event->getPlayer();
        $event->setJoinMessage(str_replace("{player}", $player->getName(), main::getInstance()->getConfig()->get("join_message")));

    }
    public function Quit(PlayerQuitEvent $event){
        $player = $event->getPlayer();
        $event->setQuitMessage(str_replace("{player}", $player->getName(), main::getInstance()->getConfig()->get("quit_message")));
    }
}