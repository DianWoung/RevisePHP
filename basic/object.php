<?php
class foo
{
    function do_foo()
    {
        echo "Doing foo.";
    }
}

$bar = new foo;
$bar->do_foo();

$obj = (object)'ciao';
echo $obj->scalar;

$obj2 = new \stdClass;
var_dump($obj2);
echo '<br />';
$obj3 = new stdClass();
var_dump($obj3);
echo '<br />';
$obj4 = (object)[];
var_dump($obj4);

