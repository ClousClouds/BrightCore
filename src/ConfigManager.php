<?php

namespace BrightCore;

use pocketmine\utils\Config;

class ConfigManager {
    private static ?array $config = null;

    public static function getConfig(): array {
        if (self::$config === null) {
            self::$config = (new Config("config.json", Config::JSON))->getAll();
        }
        return self::$config;
    }
}
