<?php 
Class Helper {
  static public function printForm($arr){
    echo "<form method='post'>";
    array_walk($arr,[$this,"keyVal"]);
    echo "<input type='submit' name='editForm' value='update'></form>";
  }

  static public function keyVal($val,$key){
    echo "$key: <input type='text' name=$key value=$val><br>"; //set form values
  }

  static public function issetPOST($val){
    return isset($_POST[$val]); // is post variable set return true/false
  }

  static public function allTrue($arr){
    if(in_array(true,$arr,true)){
      return true;
    }else{
      return false;
    }
  }

  static public function isEmptyPOST($val){
    return empty($_POST[$val]); // if post variable empty return true
  }

  static public function isEmptyMap($vals){
    return array_map([$this,'isEmptyPOST'], $vals); //make array consisting true/false
  }

  static public function isEmptyAny($vals){
    return self::allTrue(self::isEmptyMap($vals));    // check if any of the variables is empty
  }

  static public function issetMap($vals){
    //$temp = self::issetPOST;
    return array_map([$this,'issetPOST'], $vals);   //make array consisting true/false
  }

  static public function issetAll($vals){
    return self::allTrue(self::issetMap($vals));  // check if all variables are set
  }

}

?>