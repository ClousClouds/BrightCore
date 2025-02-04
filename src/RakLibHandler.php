<?php

namespace BrightCore;

class RakLibHandler {
    private PlayerManager $playerManager;

    public function __construct() {
        $this->playerManager = new PlayerManager();
    }

    public function handlePacket($packet) {
        if ($this->playerManager->isCommand($packet)) {
            CommandHandler::handleCommand($this->playerManager->getPlayerName($packet), $packet);
        }
    }
}
