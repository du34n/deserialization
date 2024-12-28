<?php

class User {
    var $firstname;
    var $lastname;

    function __construct($firstname = "", $lastname = "")
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    } 

    function __toString()
    {
        return $this->firstname." ".$this->lastname;
    }

}