<?php

namespace spec\Kyle\Todo;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TaskSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Kyle\Todo\Task');
    }
}
