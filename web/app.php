<?php

require "../vendor/autoload.php";

use Grain\Core;

$config = \json_decode(\file_get_contents("../config/prod.json"), true);
$servicesDefinition = \json_decode(\file_get_contents("../src/GrainSkeleton/Resources/services.json"), true);

$core = new Core($config);
$core->initializeContainer($servicesDefinition)
    ->initializeEventDispatcher($servicesDefinition);

$core->map("/hello/{name}", "GrainSkeleton:Hello:index")
    ->map("/persons/{firstName}", "GrainSkeleton:Hello:showPersons");

$response = $core->handle(\filter_input(INPUT_SERVER, "REQUEST_URI"));
echo $response;
