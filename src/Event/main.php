<?php

namespace Event;

use pocketmine\plugin\PluginBase;

class main extends PluginBase{
    protected static $instance;
    public function onEnable(){
       $this->getLogger()->info("Plugin enabled");
       $this->saveDefaultConfig();
       $this->getServer()->getPluginManager()->registerEvents(new PlayerEvent(), $this);
       self::$instance = $this;
    }
    public function onLoad(){
       $this->getLogger()->info("Plugin loading");
    }
    public function onDisable(){
      $this->getLogger()->info("Plugin disabled");
    }
    public static function getInstance(): self{
        return self::$instance;
    }

}