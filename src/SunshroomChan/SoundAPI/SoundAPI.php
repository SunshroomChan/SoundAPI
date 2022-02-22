<?php

declare(strict_types=1);

namespace SunshroomChan\SoundAPI;

use pocketmine\plugin\PluginBase;
use pocketmine\player\Player;
use pocketmine\network\mcpe\protocol\PlaySoundPacket;
use pocketmine\network\mcpe\protocol\StopSoundPacket;
use pocketmine\Server;

class SoundAPI extends PluginBase {

    private static SoundAPI $instance;

    public function onLoad(): void
    {
        self::$instance = $this;

    }

    public function getInstance() {
        return self::$instance;
    }

    public function addSound(Player $player, string $sound = '', float $pitch = 1, float $volume = 1){
        $pk = new PlaySoundPacket();
        $pk->x = $player->getPosition()->getX();
        $pk->y = $player->getPosition()->getY();
        $pk->z = $player->getPosition()->getZ();
        $pk->volume = $volume;
        $pk->pitch = $pitch;
        $pk->soundName = $sound;
        $player->getNetworkSession()->sendDataPacket($pk);
    }

    public function stopSound(Player $player, string $sound = '', bool $all = true){
        $pk = new StopSoundPacket();
        $pk->soundName = $sound;
        $pk->stopAll = $all;
        Server::getInstance()->broadcastPackets($player->getWorld()->getPlayers(), [$pk]);
    }
}