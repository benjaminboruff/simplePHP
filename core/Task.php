<?php

namespace Core;

class Task
{
    protected $description;
    protected $completed;

    // public function __construct($description)
    // {
    //     $this->description = $description;
    // }

    public function isComplete()
    {
        return $this->completed;
    }

    public function getDescription()
    {
        return $this->description;
    }
}
