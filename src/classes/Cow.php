<?php
require_once('Animal.php');
class Cow extends Animal{
  public function __construct($obj) {
    $obj['name'] = isset($obj['name']) ? $obj['name'] : 'unname cow';
    $obj['sound'] = isset($obj['sound']) ? $obj['sound'] : 'moo';
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