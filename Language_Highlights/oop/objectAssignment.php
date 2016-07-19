<?php
Class SimpleClass{
    public $var;
};
$instance = new SimpleClass();

$assigned = $instance; //兩個不同的變量存同一個obj位址
$reference =& $instance; //$reference存的是$instance變量的位址

$instance->var = '$assigned will have this value';
var_dump($assigned->var); //$assigned will have this value
var_dump($reference->var); //$assigned will have this value

$assigned->var ='change $assigned->var';
var_dump($instance->var); //change $assigned->var

$reference->var ='change $reference->var';
var_dump($instance->var); //change $reference->var

$instance = null; // $instance and $reference become null

var_dump($assigned);
var_dump($reference); //null