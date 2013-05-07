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
        $this->sayHello()->shouldReturn('Hello');
    }

    function it_should_say_hello_to_someone(\Person $person)
    {
        $person->getName()->willReturn('Steve');

        $this->sayHelloToSomeone($person)->shouldReturn('Hello Steve');
    }

    function it_should_address_someone_with_a_gender_specific_salutation(\Person $person)
    {
        $person->getName()->willReturn('Jane');
        $person->isFemale()->willReturn(true);
        $person->isMale()->willReturn(false);

        $this->addressSomeoneWithSalutation($person)->shouldReturn('Dear Ms. Jane');
    }
}
