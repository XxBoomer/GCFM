<?php

namespace CentOs;


use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;
use pocketmine\utils\Config;
use pocketmine\Server;
use pocketmine\utils\TextFormat as C;

class VipsPlusMain extends PluginBase implements Listener{
	public function onEnable(){
		@mkdir($this->getDataFolder());
		$this->vips = new Config($this->getDataFolder() . "codeoftoday.yml", Config::YAML);
		$this->vips = new Config($this->getDataFolder() . "playersnormal.yml", Config::YAML);
		$this->vips = new Config($this->getDataFolder() . "playersvip.yml", Config::YAML);
		$this->getLogger()->info("§a" . $this->getDescription()->getFullName() . " enabled!");
    }
	public function onCommand(CommandSender $sender, Command $command, $label, array $args){
		if(count($args) === 0){
			return false;
		}
		$arg = array_shift($args);
		switch($arg){
			case "member":
			case "mems":
			case "normal":
				if
				
			return true;
		}
	}
}			
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				