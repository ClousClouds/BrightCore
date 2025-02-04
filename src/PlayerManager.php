<?php

namespace BrightCore;

class PlayerManager {
    public static function isCommand($packet): bool {
        return method_exists($packet, "getCommand");
    }

    public static function getPlayerName($packet): string {
        return $packet->username ?? "UnknownPlayer";
    }
}
