<?php
/**
 * Created by PhpStorm.
 * User: DianWang
 * Date: 2016/12/23
 * Time: 10:12
 */
header('content-type:text/html;charset:utf8');
error_reporting(E_ALL);

echo 'hello world';#输出字符串
echo '<br /><pre>';
class obj
{
};
$obj = new obj;
if (!empty(get_object_vars($obj))) {
    echo 'this is true';
} else {
    echo 'this is fault';
}
echo '<br />';
#数字类型

echo PHP_INT_SIZE;

#大数的溢出

var_dump(898964891);//返回float浮点型

#除法的四舍五入

var_dump((0.1+0.7)*10);

var_dump(round(25/7));//小数点后大于5进位

var_dump(intval(25/7));//
var_dump((int)(25/7));

var_dump($_REQUEST);

$a =1.23456789;
$b =1.23456780;
$eps = 0.00001;
if(abs($a-$b) < $eps){
    echo true;
}

#字符串

echo 'hello\n$a';
echo "hello\r\n";
echo "hello$a";

$temp = <<<TEMP
this is a template;
test the varial $a;
TEMP;
var_dump($temp);

echo "this is ${a}";
echo "this is {$a}";

function getArray(){
    return [['baba','mama'],2,'b'];
}
$arr = [
    '1'=>'a',
    '1.5'=>'b',
    'true' =>'c'
];
var_dump($arr);
$tmp = getArray();
list($pram1,,$pram2) = getArray();
list(,$children2) = $pram1;
print_r($children2);

//$fun = function fun(){
//    return 'hello fun';
//};
//
//echo $fun;

$c='d';
$d='e';
$e='f';
echo $$$c;
echo '<br />';
echo '<pre>';
$f = &$e;
echo $f;
$f = 'test';
echo $e;
echo $f;
echo '<br>';

function test(&$param)
{
    $param=$param.'hahaha';
}
test($f);
echo $e;
echo $f;
echo '<br>';
function &test2()
{
    static $b=0;//申明一个静态变量
    $b=$b+1;
    echo $b;
    return $b;
}
$g = test2();

$g = &test2();

$g = 5;
$g = test2();

echo '你好啊';
$haha = 'true';
echo $haha;

$str = 'A>B,B<c,it is fine';
$htmlstr = htmlspecialchars($str);

echo '<br>';
echo $haha[1];

$doc = <<<"DOC"
test {$htmlstr};
DOC;
echo $doc;
echo '<br>';
echo false, "test";

$arr = 'tes';
echo is_scalar($arr);

/*
 * 类型
 */
echo gettype($g);