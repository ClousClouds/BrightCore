<?php

namespace BrightCore;

class Logger {
    public static function log(string $message) {
        $config = ConfigManager::getConfig();
        file_put_contents($config["log_file"], "[" . date("Y-m-d H:i:s") . "] " . $message . PHP_EOL, FILE_APPEND);
        echo $message . PHP_EOL;
    }
}
