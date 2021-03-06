<?php

require __DIR__ . "/../vendor/autoload.php";

use Grain\Core;

$config = \json_decode(\file_get_contents(__DIR__ . "/../config/dev.json"), true);
$servicesDefinition = \json_decode(\file_get_contents(__DIR__ . "/../src/GrainSkeleton/Resources/services.json"), true);

$core = new Core($config);
$core->initializeContainer($servicesDefinition)
    ->initializeEventDispatcher($servicesDefinition);

$core->map("/hello/{name}", array("GET", "POST"), "GrainSkeleton:Hello:index", "sayHello")
    ->map("/persons/{firstName}", "GET", "GrainSkeleton:Hello:showPersons", "getPersons");

$response = $core->handle(
    \filter_input(INPUT_SERVER, "REQUEST_URI"),
    \filter_input(INPUT_SERVER, "REQUEST_METHOD"),
    \filter_input(INPUT_SERVER, "CONTENT_TYPE") ? : \filter_input(INPUT_SERVER, "HTTP_CONTENT_TYPE")
);
echo $response;
