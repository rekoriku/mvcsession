<?php 
namespace helper;
function printForm($arr){
  echo "<form method='post'>";
  array_walk($arr,[$this,"keyVal"]);
  echo "<input type='submit' name='editForm' value='update'></form>";
}

function keyVal($val,$key){
  echo "$key: <input type='text' name=$key value=$val><br>"; //set form values
}

function issetPOST($val){
  return isset($_POST[$val]); // is post variable set return true/false
}

function allTrue($arr){
  if(in_array(true,$arr,true)){
    return true;
  }else{
    return false;
  }
}

function isEmptyPOST($val){
  return empty($_POST[$val]); // if post variable empty return true
}

function isEmptyMap($vals){
  return array_map([$this,'isEmptyPOST'], $vals); //make array consisting true/false
}

function isEmptyAny($vals){
  return $this->allTrue($this->isEmptyMap($vals));    // check if any of the variables is empty
}

function issetMap($vals){
  //$temp = $this->issetPOST;
  return array_map([$this,'issetPOST'], $vals);   //make array consisting true/false
}

function issetAll($vals){
  return $this->allTrue($this->issetMap($vals));  // check if all variables are set
}
?>