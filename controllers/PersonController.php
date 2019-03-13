<?php
class PersonController {

  function getAll()
  {
    return $this->person->getAll();
  }

  function get(){
    return $this->person->getPerson('kalle');
  }
}
