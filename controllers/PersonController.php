<?php
class PersonController 
{
  private $person;

  function getAll()
  {
    return $this->person->getAll();
  }

  function get(){
    return $this->person->getPerson('kalle');
  }
}
