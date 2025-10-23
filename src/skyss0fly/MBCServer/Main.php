<?php

namespace skyss0fly\MBCServer;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

  private $config;
  
public function onLoad(): void {
  $this->config = $this->getConfig();

  // todo: key authentication system
  // this will be done by opening up a seperate websocket server which will act as the authentication from client to server aswell as for security logs for client
}

}
