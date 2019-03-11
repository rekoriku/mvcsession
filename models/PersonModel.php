<?php
class PersonModel extends Model
{
  public $id = "";
  public $fname = "";
  public $sname = "";


  function getPerson($person) {
    return $this->query("SELECT * FROM serverside19_persons WHERE fname='$person'")->fetch(PDO::FETCH_ASSOC);
  }

  function insert() {
    if(!empty($this->id) && !empty($this->fname) && !empty($this->sname)) {
        $this->query("INSERT INTO serverside19_persons (id, fname, sname) VALUES ('$this->id', '$this->fname', '$this->sname')");
      }
    }

  function update() {
    if(!empty($this->id) && !empty($this->fname) && !empty($this->sname)) {
        $this->query("UPDATE serverside19_persons SET id='$this->id', fname='$this->fname', sname='$this->sname' WHERE id='$this->id'");
    }
  }

  public static function delete($id) {
    if(!empty($id)){
        $this->query("DELETE FROM serverside19_persons WHERE id ='$id'");
    }
  }


}