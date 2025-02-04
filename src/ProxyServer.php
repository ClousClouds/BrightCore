<?php

namespace BrightCore;

use raklib\RakLibServer;

class ProxyServer {
    private RakLibServer $raklib;
    private RakLibHandler $rakLibHandler;

    public function __construct() {
        $this->rakLibHandler = new RakLibHandler();
    }

    public function start() {
        $config = ConfigManager::getConfig();
        $host = $config["proxy_host"];
        $port = $config["proxy_port"];

        $this->raklib = new RakLibServer($host, $port);
        Logger::log("Proxy running at $host:$port");

        while (true) {
            $packet = $this->raklib->receive();
            if ($packet !== null) {
                $this->rakLibHandler->handlePacket($packet);
            }
        }
    }
}
