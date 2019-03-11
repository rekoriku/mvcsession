<?php
class PersonModel extends Model
{

  function __construct() {

  }

  function getPerson($person) {
    return $this->query("SELECT * FROM serverside19_persons WHERE fname='$person'")->fetch(PDO::FETCH_ASSOC);
  }
}


 