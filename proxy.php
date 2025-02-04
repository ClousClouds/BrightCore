<?php

require "vendor/autoload.php";
require "src/BrightCore.php";

use BrightCore\BrightCore;

$proxy = new BrightCore();
$proxy->start();
