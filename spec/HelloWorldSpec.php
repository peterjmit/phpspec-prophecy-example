<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class HelloWorldSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('HelloWorld');
    }

    function it_should_say_hello()
    {
        $this->sayHello()->shouldReturn('Hello!');
    }
}
