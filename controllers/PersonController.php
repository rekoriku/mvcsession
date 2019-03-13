<?php
class PersonController 
{
  private $person;

  function __construct() {
    $this->person = new PersonModel;
  }

  function getAll(){ 
    return $this->person->getAll();
  }

  function get($fname){
    return $this->person->getFname($fname);
  }

  function insert($id, $fname, $sname)
  {
    $this->person->id = $id;
    $this->person->fname = $fname;
    $this->person->sname = $sname;
    $this->person->insert();
  }

  function update($id, $fname, $sname)
  {
    $this->person->id = $id;
    $this->person->fname = $fname;
    $this->person->sname = $sname;
    $this->person->update();
  }  
}
