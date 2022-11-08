<?php
require_once "HumanAbstract.php";
class EnglishHuman extends HumanAbstract
{

    public function getGreetings(): string
    {
        return "Hello!";
    }

    public function getMyNameIs(): string
    {
        return "My name is ".$this->getName();
    }

    public function introduceYourself(): string
    {
        return $this->getGreetings()." ".$this->getMyNameIs();
    }
}