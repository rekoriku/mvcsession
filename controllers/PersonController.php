<?php
class PersonController extends Base {
private $person;
function __construct(){
  $this->person = new PersonModel;
}

function get(){
  return $this->person->getPerson('kalle');
}
}
?>