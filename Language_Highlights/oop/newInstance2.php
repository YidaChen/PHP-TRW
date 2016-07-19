<?php
class Test
{
    static public function getNew()
    {
        return new static; //t t t
        //return new self; // t t f, 繼承的使用此方法會返回父類
    }
    public function getSelf()
    {
        //return new static; //能返回子類
        return new self; //繼承的使用此方法一樣會返回父類
    }
}

class Child extends Test
{}

$obj1 = new Test();
$obj2 = new $obj1;
var_dump($obj1 !== $obj2);

$obj3 = Test::getNew();
var_dump($obj3 instanceof Test);

$obj4 = Child::getNew();
var_dump($obj4 instanceof Child);

var_dump($obj4->getSelf());