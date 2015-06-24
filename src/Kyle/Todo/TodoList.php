<?php

namespace Kyle\Todo;

class TodoList
{
    public $todo_tasks;

    public function addTodoListTask(Task $task)
    {
        $this->todo_tasks->add($task);
    }

    public function hasTasks()
    {
        if($this->todo_tasks->count() > 0) {
            return true;
        }
        else {
            return false;
        }
    }
}
