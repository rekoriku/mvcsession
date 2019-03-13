<?php
class PersonController 
{
  private $person;

  function __construct()
  {
      $this->person = new PersonModel;
  }

  function getAll()
  {
    return $this->person->getAll();
  }

  function get(){
    return $this->person->getPerson('kalle');
  }
}
