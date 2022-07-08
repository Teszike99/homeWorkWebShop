<?php
require_once __DIR__.'/vendor/autoload.php';
use App\core\Application;
$app = new Application();
$app->testMethod("testMessage");