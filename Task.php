<?php

class Task
{
    protected $description;
    protected $completed;

    public function completed()
    {
        return $this->completed;
    }

    public function description()
    {
        return $this->description;
    }
}
