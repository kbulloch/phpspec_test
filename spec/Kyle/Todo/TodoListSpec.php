<?php

namespace spec\Kyle\Todo;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Kyle\Todo\TaskCollection;
use Kyle\Todo\Task;

class TodoListSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Kyle\Todo\TodoList');
    }

    function it_adds_a_task_to_the_list(TaskCollection $tc_tasks, Task $task)
    {
        $tc_tasks->add($task)->shouldBeCalledTimes(1);
        $this->todo_tasks = $tc_tasks;

        $this->addTodoListTask($task);
    }

    function it_checks_whether_it_has_any_tasks(TaskCollection $tc_tasks)
    {
        $tc_tasks->count()->willReturn(0);
        $this->todo_tasks = $tc_tasks;

        $this->hasTasks()->shouldBeFalse();

        $tc_tasks->count()->willReturn(20);
        $this->todo_tasks = $tc_tasks;

        $this->hasTasks()->shouldBeTrue();
    }

    function getMatchers()
    {
        return [
            'beTrue' => function($subject) {
                return $subject === true;
            },
            'beFalse' => function($subject) {
                return $subject === false;
            },
        ];
    }
}
