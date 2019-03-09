<?php
class Form extends Base {

function __construct($db){
  parent::__construct($db);
}

function insert(){
  //check if all posted values are true and if so set the variables
  
  $isset = $this->issetAll(["id","firstname","lastname","username","password","description","addForm"]); // this is to check that we get proper input
  $isempty = $this->isEmptyAny((["firstname","lastname","username","password"])); // these are required

  if($isset && !$isempty){
    $this->insertAccount("id","firstname","lastname","username","password","description");
    echo "inserted new user";
  } 
}

function get(){
  if($this->issetPOST("getForm") && !$this->isEmptyPOST("username")) {
    $this->printForm($this->account("username"));               //tulostetaan formi
  }
}

function update() {
  $isset = $this->issetAll(["id","user","fname","sname","description","editForm"]);
  $isempty = $this->isEmptyAny(["id","user","fname","sname"]);
  
  if($isset == true && $isempty == false) {
    $this->updateAccount("id","fname","sname","user","description");
    echo "updated";
  }else if($isset == false) {
    //do nothing
  }else {
    echo "failed to update";
  }
}

}
?>