<?php

namespace GrainSkeleton\EventListener;

class HelloEventListener
{
    public function onPostRequest()
    {
        echo "Hello from the post-request event listener.<br />";
    }
    
    public function onPreResponse()
    {
        echo "Hello from the pre-response event listener.<br />";
    }
}
