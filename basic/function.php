<?php


;
$test = function ()
    {
        return 'hello world';
    };
var_dump($test());
//变量函数
$name = 'time';
echo $name();

echo '<br />';

function secondTest($a,$b,$c){
    return $a+$b+$c;
}
echo call_user_func('secondTest',1,2,3);
echo '<br />';
echo call_user_func_array('secondTest',[1,2,3]);

echo '<br />';
function test($i){
    echo $i.'<br />';
    if($i>=0){
        $func = __FUNCTION__;
        $func($i-1);
    };
    echo $i.'<br />';
}
test(3);

echo '<br />';

function third(){
    $num = func_num_args();
   // echo func_get_arg(2);
    $arr = func_get_args();
    foreach ($arr as $vals){
        echo $vals.'<br />';
    }
}
third(1,2,3);

//print_r(get_defined_functions());
echo function_exists('test');
echo "<hr />";
function getExt($filename){
    $arr = explode('.',$filename);
    $ext = end($arr);
    return strtolower($ext);
}