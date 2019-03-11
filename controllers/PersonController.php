<?php
class PersonController extends Base {
private $person;
function __construct(){
  $this->person = new PersonModel;
}

function get(){
  echo $this->person->getPerson('kalle');
}


}
?>