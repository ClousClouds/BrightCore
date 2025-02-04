<?php

namespace BrightCore;

class TransferManager {
    public static function transferPlayer(string $player, string $host, int $port) {
        Logger::log("Transferring $player to $host:$port");

        // Send a transfer request via RakLib
        RakLibHandler::sendTransferPacket($player, $host, $port);
    }
}
