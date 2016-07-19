<?php
class A
{
    function foo()
    {
        if (isset($this)) {
            echo '$this is defined ('.get_class($this).')<br>';
        } else {
            echo '$this is not defined.<br>';
        }
    }
}
class B
{
    function bar()
    {
        A::foo();
    }
}
$a = new A();
$a->foo(); //$this is defined (A)

A::foo(); //$this is not defined.

$b = new B();
$b->bar(); //$this is not defined.
B::bar(); //$this is not defined.