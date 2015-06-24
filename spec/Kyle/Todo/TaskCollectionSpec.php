<?php

namespace spec\Kyle\Todo;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Kyle\Todo\Task;

class TaskCollectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Kyle\Todo\TaskCollection');
    }

    function it_adds_a_task_to_the_collection(Task $task, Task $anotherTask)
    {
        $this->add($task);
        $this->tasks[0]->shouldBe($task);

        $this->add($anotherTask);
        $this->tasks[1]->shouldBe($anotherTask);
    }

    function it_is_countable()
    {
        $this->shouldImplement('Countable');
    }

    function it_counts_elements_of_the_collection()
    {
        $this->count()->shouldReturn(0);

        $this->tasks = ['thing'];
        $this->count()->shouldReturn(1);
    }
}
