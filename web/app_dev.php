<?php

require __DIR__ . "/../vendor/autoload.php";

use Grain\Core;

$config = \json_decode(\file_get_contents(__DIR__ . "/../config/dev.json"), true);
$servicesDefinition = \json_decode(\file_get_contents(__DIR__ . "/../src/GrainSkeleton/Resources/services.json"), true);

$core = new Core($config);
$core->initializeContainer($servicesDefinition)
    ->initializeEventDispatcher($servicesDefinition);

$core->map("/hello/{name}", "GET", "GrainSkeleton:Hello:index", "sayHello")
    ->map("/hello/{name}", "POST", "GrainSkeleton:Hello:new", "postHello")
    ->map("/persons/{firstName}", "GET", "GrainSkeleton:Hello:showPersons", "getPersons");

$response = $core->handle(\filter_input(INPUT_SERVER, "REQUEST_URI"), \filter_input(INPUT_SERVER, "REQUEST_METHOD"));
echo $response;
