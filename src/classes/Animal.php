<?php
abstract class Animal {
  protected $_name;
  protected $_sound;
  protected $_attr;

  public function __construct($obj){
    $this->_name = $obj['name'];
    $this->_sound = $obj['sound'];
    $this->_attr = $obj;
  }

  public function setSound($sound){
      $this->_sound = $sound;
  }
  public function getSound(){
      return $this->_sound;
  }
  public function getName(){
      return $this->_name;
  }
  public function setName($name){
      $this->_name = $name;
  }
  public function getAttr(){
      return $this->_attr;
  }
  public function get($key){
      return isset($this->_attr[$key]) ? $this->_attr[$key] : 'attribute not set';
  }
  public function getOutput(){
      return "{$this->_name} says '{$this->_sound}'";
  }
  abstract static function create($arr);
}
?>