<?php

namespace BrightCore;

class CommandHandler {
    public static function handleCommand(string $player, string $command) {
        $config = ConfigManager::getConfig();
        $commands = $config["commands"];

        if (isset($commands[$command])) {
            $serverName = $commands[$command];
            $server = $config["target_servers"][$serverName] ?? null;

            if ($server) {
                Logger::log("$player is switching to $serverName");
                TransferManager::transferPlayer($player, $server["host"], $server["port"]);
            } else {
                Logger::log("Server $serverName not found!");
            }
        }
    }
}
