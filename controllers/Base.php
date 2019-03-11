<?php

class Base {
//   protected $db;

// protected function __construct($db){
//   $this->db = $db; // pass the database connection object
// }
protected function printForm($arr){
  echo "<form method='post'>";
  array_walk($arr,[$this,"keyVal"]);
  echo "<input type='submit' name='editForm' value='update'></form>";
}

protected function keyVal($val,$key){
  echo "$key: <input type='text' name=$key value=$val><br>"; //set form values
}

// protected function account($val){
//   return $this->db->getAccount($_POST[$val]); // return user+person info
// }

// protected function insertAccount($id,$fname,$lname,$user,$pass,$desc){
//   $this->db->insertUser($_POST[$id],$_POST[$fname], $_POST[$lname], $_POST[$user], md5($_POST[$pass]), 0,$_POST[$desc]); //add data to person + user table
// }

// protected function user($val,$field){
//   return $this->db->getUser($_POST[$val])[$field]; // return user info
// }

// protected function updateAccount($id,$fname,$sname,$user,$description){
//   $this->db->updateUser($_POST[$id],$_POST[$fname],$_POST[$sname],$_POST[$user],$_POST[$description]);
// }

protected function issetPOST($val){
  return isset($_POST[$val]); // is post variable set return true/false
}
//i dont know why but this function gave me too much trouble
protected function allTrue($arr){
  if(in_array(true,$arr,true)){
    return true;
  }else{
    return false;
  }
}

protected function isEmptyPOST($val){
  return empty($_POST[$val]); // if post variable empty return true
}

protected function isEmptyMap($vals){
  return array_map([$this,'isEmptyPOST'], $vals); //make array consisting true/false
}

protected function isEmptyAny($vals){
  return $this->allTrue($this->isEmptyMap($vals));    // check if any of the variables is empty
}

protected function issetMap($vals){
  //$temp = $this->issetPOST;
  return array_map([$this,'issetPOST'], $vals);   //make array consisting true/false
}

protected function issetAll($vals){
  return $this->allTrue($this->issetMap($vals));  // check if all variables are set
}

// protected function userExist($user){
//   return $user == $this->db->getUser($user)['user'];    //check if user exists in database
// }

// protected function passValid($user,$password){
//   return md5($password) == $this->db->getUser($user)['pwd']; //check if password is correct 
// }


}
?>