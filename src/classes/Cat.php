<?php
require_once('Animal.php');
class Cat extends Animal{
  public function __construct($obj) {
      $obj['name'] = isset($obj['name']) ? $obj['name'] : 'unname cat';
      $obj['sound'] = isset($obj['sound']) ? $obj['sound'] : 'meow';
      parent::__construct($obj);
  }
  public static function create($arr){
    $tempArr = array();
    if(is_array($arr[0])){
      foreach($arr as $a){
        array_push($tempArr, new cat($a));
      }
    }
    else{
      array_push($tempArr, new cat($a));
    }
    return $tempArr;
  }
}


?>