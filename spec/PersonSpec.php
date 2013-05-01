<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PersonSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Person');
    }

    function it_should_have_a_name()
    {
        $this->setName('test');

        $this->getName()->shouldReturn('test');
    }

    function it_should_be_male()
    {
        $this->setGender('male');

        $this->shouldBeMale();
    }

    function it_should_be_female()
    {
        $this->setGender('female');

        $this->shouldBeFemale();
    }
}
