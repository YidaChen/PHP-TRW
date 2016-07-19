<?php
Class SimpleClass{
    public function __construct()
    {
        echo "__construct" . "<br>";
    }
};

$instance = new SimpleClass();

// This can also be done with a variable:
$className = 'SimpleClass';
$instance = new $className(); // new SimpleClass()