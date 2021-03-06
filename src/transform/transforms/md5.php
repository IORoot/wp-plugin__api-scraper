<?php

namespace yt\transform;

use yt\interfaces\transformInterface;

class md5 implements transformInterface
{
    
    public $description = "MD5 Encodes input.";

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
        return md5($this->input);
    }

}
