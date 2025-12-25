<?php // public/index.php

require(__DIR__ . "/../vendor/autoload.php");
require(__DIR__ . "/../src/Application.php");

$application = new \App\Application();
$response = $application->run();

new \Hi\Http\ResponseEmitter()->emit($response);
