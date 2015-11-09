<?php

namespace GrainSkeleton\Service;

class HelloService
{
    private $dependencyService;
    
    public function __construct($dependencyService)
    {
        $this->dependencyService = $dependencyService;
    }
    
    public function helloFromService()
    {
        echo "Hello from service!<br />";
        
        $this->dependencyService->helloFromDependencyService();
    }
}