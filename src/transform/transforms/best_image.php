<?php

namespace yt\transform;

use yt\interfaces\transformInterface;

class best_image implements transformInterface
{
    
    public $description = "Take the YouTube thumbnails array and return the highest quality URL";

    public $parameters = 'None';

    public $input;
    
    public function config($config)
    {
        return;
    }

    public function in($input)
    {
        $this->input = $input;
        return;
    }

    public function out()
    {
        $last = end($this->input);

        if (isset($last->url))
        {
            return $last->url;
        }

        if (isset($last->src))
        {
            return $last->src;
        }
        
        return 'URL/SRC NOT FOUND IN SELECTED LOCATION.';
    }

}
