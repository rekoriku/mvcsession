<?php
class PersonController {


  function get(){
    $person = new PersonModel;
    return $person->getFname('kalle');
  }
}
?>