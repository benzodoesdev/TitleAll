<?php

namespace: php

use pocketmine\plugin\PluginBase;
use pocketmine\PLayer;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase {

    public function onEnable(){
        $this->getLogger()->info("Enabled");
    }

    public function onCommand(Command $sender $cmd, string $label, array $args): bool{
		if($cmd->getName() === "titleall"){
			if(count($args) < 1){
			    $sender->sendMessage("Usage: /titleall <title> <subtitle>");
			    } else {
        foreach ($this->getServer()->getOnlinePlayers() as $p)
            $p->addTitle($args[0], $args[1] 20, 20, 20)
                }
			}
            return true;
		}
	}
}