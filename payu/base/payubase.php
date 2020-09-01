<?php

class base{
// $key = "";
// $salt = "";
private static $instance;
private function __construct()
{

}
public function getInstance()
{
  if(!self::$instance)
    self::$instance = new static();
  $instance = new static();
  return self::$instance;
}

public function set($keyHere,$saltHere)
{
  $this->key = $keyHere;
  $this->salt = $saltHere;
}
public function get($key,$salt)
{
  $key = $key;
  $salt = $salt;
  return array($key,$salt);
}

}

 ?>
