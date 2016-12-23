<?php
/**
 * Created by PhpStorm.
 * User: DianWang
 * Date: 2016/12/23
 * Time: 10:12
 */

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

var_dump(1231283789896489172379721379);//返回float浮点型

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

echo 'hello';
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


