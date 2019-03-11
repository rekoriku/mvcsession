<?php
class PersonModel extends Model
{
  
  function getPerson($person) {
    return $this->query("SELECT * FROM serverside19_persons WHERE fname='$person'")->fetch(PDO::FETCH_ASSOC);
  }

  function insertPerson($id, $fname, $sname) {
    try{
      $this->pdo->beginTransaction();
      $this->query("INSERT INTO serverside19_persons (id, fname, sname) VALUES ('$id', '$fname', '$sname')");
      $this->pdo->commit();
    }
    catch(Exception $ex){
      echo $ex->getMessage();
      $this->pdo->rollBack();
    }
  }

  function updatePerson($id, $fname, $sname) {
    try{
      $this->pdo->beginTransaction();
      $this->query("UPDATE serverside19_persons SET id='$id', fname='$fname', sname='$sname' WHERE id='$id'");
      $this->pdo->commit();
    } 
    catch(Exception $ex){
      echo $ex->getMessage();
      $this->pdo->rollBack();
    }
}
}


 