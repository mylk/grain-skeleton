<?php

namespace GrainSkeleton\EventListener;

class HelloEventListener
{
    public function onPostRequest()
    {
        echo "Hello from the post-request event listner.<br />";
    }
    
    public function onPreResponse()
    {
        echo "Hello from the pre-response event listner.<br />";
    }
}
