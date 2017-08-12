<?php

namespace App;

class Task {

    protected $task;
    protected $active;

    public function __construct($task, $active)
    {
        $this->task = $task;
        $this->active = $active;
    }

}