<?php

require "../vendor/autoload.php";

use Grain\Core;

$config = \json_decode(\file_get_contents("../config/dev.json"), true);

$core = new Core($config);
$core->map("/hello/{name}", "GrainSkeleton:HelloController:index")
    ->map("/persons/{firstName}", "GrainSkeleton:HelloController:showPersons");

$response = $core->handle(\filter_input(INPUT_SERVER, "REQUEST_URI"));
echo $response;
