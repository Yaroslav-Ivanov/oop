<?php

abstract class Person
{
    private $name;
    private $form;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    public function introduce()
    {
        return "My name is $this->name $this->surname \n";
    }
}