<?php

namespace GrainSkeleton\Controller;

use Grain\Controller;

class HelloController extends Controller
{
    public function indexAction($request)
    {
        $container = $this->getContainer();
        $eventDispatcher = $this->getEventDispatcher();
        
        try {
            $helloService = $container->HelloService;
            $helloService->helloFromService();
            
            $eventDispatcher->dispatch("custom_event");
        } catch (\Exception $ex) {
            die($ex->getMessage());
        }
        
        $this->render("hello.php", array("name" => $request["name"]));
    }
    
    public function showPersonsAction($request)
    {
        $persons = $this->getDb("mydb")->find("
            SELECT first_name, last_name, telephone
            FROM persons
            WHERE first_name = :firstName
        ", array(":firstName" => $request["firstName"]));
        
        if ($persons) {
            $this->render("persons.php", array("persons" => $persons));
        }
    }
}
