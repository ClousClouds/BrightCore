<?php

namespace BrightCore;

class BrightCore {
    private ProxyServer $proxyServer;

    public function __construct() {
        $this->proxyServer = new ProxyServer();
    }

    public function start() {
        Logger::log("Starting BrightCore Proxy...");
        $this->proxyServer->start();
    }
}
