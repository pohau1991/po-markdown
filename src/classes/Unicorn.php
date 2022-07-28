<?php
require_once('Animal.php');
class Unicorn extends Animal{
  public function __construct(Object $obj) {
    $obj['name'] = isset($obj['name']) ? $obj['name'] : 'unname unicorn';
    $obj['sound'] = isset($obj['sound']) ? $obj['sound'] : 'unknown';
    parent::__construct($obj);
  }
  public function getOutput(){
      return "Unicorns are not real";
  }
  public static function create($arr){
    $tempArr = array();
    if(is_array($arr[0])){
      foreach($arr as $a){
        array_push($tempArr, new unicorn($a));
      }
    }
    else{
      array_push($tempArr, new unicorn($a));
    }
    return $tempArr;
  }
}


?>