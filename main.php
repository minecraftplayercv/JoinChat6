<?php
namespace JoinChat6;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\player\PlayerJoinEvent;
class Main extends PluginBase implements Listener {
        public function onEnable(){
                $this->getServer()->getLogger()->info("JoinMessage enabled!");
                $this->getServer()->getManager()->registerEvents($this, $this);
                
                
        )
