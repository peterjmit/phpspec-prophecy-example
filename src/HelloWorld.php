<?php

class HelloWorld
{
    public function sayHello()
    {
        return 'Hello';
    }

    public function sayHelloToSomeone(Person $person)
    {
        return $this->sayHello() . ' ' . $person->getName();
    }

    public function addressSomeoneWithSalutation(Person $person)
    {
        if ($person->isMale()) {
            $salutation = 'Mr. ';
        } else if ($person->isFemale()) {
            $salutation = 'Ms. ';
        } else {
            // gender in-specific salutation
            $salutation = '';
        }

        return 'Dear ' . $salutation . $person->getName();
    }
}