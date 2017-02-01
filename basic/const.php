<?php
header('content-type:text/html;charset:utf8');
define('PI',3.14);
define('NAME','这是名字的常量');
define('TEST','设置常量名不区分大小写',true);
echo PI;
echo PHP_VERSION;
echo '<br>';
echo NAME;

const __TEST__ = 'this is test';
echo __TEST__;
echo constant('PI');
echo '<br />';
var_dump(defined('__TEST'));
echo '<br />';
echo test;
goto next;
//获取所有的已定义常量
echo '<br />';
echo '<pre>';
//print_r(get_defined_constants());
echo __LINE__;
echo '<br />';
echo __FILE__;
echo '<br />';
echo __DIR__;

echo '<br />';
echo `php -v`;
next:
echo 'this is next';
echo $_SERVER['REMOTE_ADDR'];