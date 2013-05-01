<?php

class Person
{
    private $name;
    private $gender;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function isMale()
    {
        return $this->gender === 'male';
    }

    public function isFemale()
    {
        return $this->gender === 'female';
    }
}