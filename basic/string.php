<?php

$str = 'this is a strIng';
echo strlen($str);
echo '<br />';
echo strrpos($str,'i');
echo '<br />';
echo strpos($str,'i');
echo '<br />';
echo stripos($str,'i');
echo  '<br />';
echo strripos($str,'i');
echo '<br />';
echo strstr($str,'i');
echo '<br />';
echo strchr($str,'i');
echo '<br />';
echo strrchr($str,'i');
echo '<br />';
echo stristr($str,'i');
echo '<br />';

echo str_replace('i','I',$str,$count);
echo $count;

echo '<br />';
echo substr($str,2);
echo '<br />';

echo ord('a');
echo chr(97);

echo '<br />';
echo md5('this is test');
echo '<br />';
echo sha1('this is test');

echo '<br />';
$string =<<<EOF
<h3>title</h3>\n
"hello world,I'm fine",<br />
EOF;
echo strip_tags($string);
echo '<br />';
echo addslashes($string);
echo '<br />';
echo htmlentities($string);
echo '<br />';
echo htmlspecialchars($string);
echo '<br />';
echo nl2br($string);


echo '<br />';
$str1 = 'Hello';
$str2 = 'hello';
echo strcmp($str1,$str2);
echo '<br />';
echo strcasecmp($str1,$str2);
echo '<br />';
echo '<pre>';
print_r(str_split($str1,2));

echo '<br />';
echo strrev($str1);
echo '<br />';
echo str_shuffle($str1);
echo '<br />';
echo str_repeat($str1,2);
echo '<br />';
$str1 = 'a,b,c,d';
print_r(str_getcsv($str1));
$url = 'http://www.dianwang.com?num=12&name=dianwang&married=false';
print_r(parse_url($url));
$urlstr = parse_url($url)['query'];
echo '<br />';
$str = "num=12&name=dianwang&married=false";
parse_str($str);
echo $num;
echo $name;
echo $married;

echo '<br />';
printf($str);
echo '<br />';
echo sprintf($str);
echo '<br />';
print_r(gettimeofday());
print_r(getdate(time()));





