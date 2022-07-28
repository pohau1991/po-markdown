<?php
require_once('Animal.php');
class Dog extends Animal{
  public function __construct(Object $obj) {
    $obj['name'] = isset($obj['name']) ? $obj['name'] : 'unname dog';
    $obj['sound'] = isset($obj['sound']) ? $obj['sound'] : 'ahrooo';
    parent::__construct($obj);
  }
  public static function create($arr){
    $tempArr = array();
    if(is_array($arr[0])){
      foreach($arr as $a){
        array_push($tempArr, new cow($a));
      }
    }
    else{
      array_push($tempArr, new cow($a));
    }
    return $tempArr;
  }
}


?>