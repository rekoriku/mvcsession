<?php
class PersonModel extends Model
{
  public $id = "";
  public $fname = "";
  public $sname = "";

  public function getAll()
  {
    return $this->query("SELECT * FROM serverside19_persons")->fetch(PDO::FETCH_ASSOC);
  }

  public function getId($id) {
    return $this->query("SELECT * FROM serverside19_persons WHERE id='$id'")->fetch(PDO::FETCH_ASSOC);
  }

  public function getFname($person) {
    return $this->query("SELECT * FROM serverside19_persons WHERE fname='$person'")->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getSname($person) {
    return $this->query("SELECT * FROM serverside19_persons WHERE sname='$person'")->fetch(PDO::FETCH_ASSOC);
  }

  function idExist(){
  return $this->id == $this->getId($this->id)['id'];    //check if id exists in database
}

  function insert() {
    //if(!empty($this->id) && !empty($this->fname) && !empty($this->sname)) {
        return $this->query("INSERT INTO serverside19_persons (id, fname, sname) VALUES ('$this->id', '$this->fname', '$this->sname')");
      //}
    }

  function update() {
    // if(!empty($this->id) && $this->idExist($this->id)) {
        return $this->query("UPDATE serverside19_persons SET id='$this->id', fname='$this->fname', sname='$this->sname' WHERE id='$this->id'");
    // }
  }

  public function delete($id) {
    if(!empty($id)){
      return $this->query("DELETE FROM serverside19_persons WHERE id ='$id'");
    }
  }
}