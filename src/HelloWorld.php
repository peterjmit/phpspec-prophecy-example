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
}