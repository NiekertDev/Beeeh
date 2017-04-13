<?php

namespace Niekert\Beeeh;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\entity\Entity;
use pocketmine\entity\Effect;
use pocketmine\Player;

class Main extends PluginBase implements Listener{
	
	public function onLoad(){
		$this->getLogger()->info("Plugin Loading");
	}
	public function onEnable(){
		$this->getLogger()->info("Enabled Plugin");
	}
	public function onDisable(){
		$this->getLogger()->info("Plugin Disabled");
	}
	public function onCommand(CommandSender $sender,Command $cmd,$label,array $args){
		if($cmd->getName() === "sheep"){
			if(!$sender instanceof Player){
				$sender->sendMessage("This Command Only Works for players! Please perform this command IN GAME!");
			}
			else{
			$sender->sendMessage("Baaa");
			$effect = Effect::getEffectByName('SPEED');
			$effect->setDuration(INF)->setAmplifier(1);
			$sender->addEffect($effect);
			}
		}
	}
}