<?php

require_once "Person.php";

abstract class Worker extends Person
{
    public $salary;
    public $position;
    public $team;
}
