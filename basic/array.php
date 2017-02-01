<?php
echo '<pre>';
$arr = [
    'a',
    12 => 'this is test',
    'user' => 'dianwang'
];
echo current($arr);
echo key($arr);
echo next($arr);

echo '<br />';
echo current($arr);
echo key($arr);

echo '<br />';
echo reset($arr);
//
//while(key($arr)!==NULL){
//    echo current($arr);
//    next($arr);
//
//}

echo '<br />';
$list = [
    2 => 'a',
    'b',
    'c'
];
list(, , $a) = $list;
echo $a;

echo '<br />';
print_r(each($arr));
reset($arr);

while ((list($key, $value) = each($arr)) != false) {
    echo $key . '=>' . $value;
    echo '<br />';
}

$arr = range(1, 10);
print_r($arr);

$a = 'hello';
$b = 'world';
$parter = [1, 2];
$arr = compact('a', 'b');
print_r($arr);

print_r(array_fill(0, 6, 'this is test'));

$keys = ['a', 'b', 'c', false];
print_r(array_fill_keys($keys, 'this is test'));

$vals = [1, 2, 4, 5];
print_r(array_combine($keys, $vals));

$input = array("red", "green", "blue", "yellow");
array_splice($input, 1, -1);
print_r($input);