<?php


class Student
{
    private $id;
    private $givenName;
    private $lastName;
    private $email;
    private $studyProgram;

    function __construct()
    {
    }

    function getId()
    {
        return $this->id;
    }

    function getGivenName()
    {
        return $this->givenName;
    }
    function getLastName()
    {
        return $this->lastName;
    }
    function getEmail()
    {
        return $this->email;
    }
    function getStudyProgram()
    {
        return $this->studyProgram;
    }
}


