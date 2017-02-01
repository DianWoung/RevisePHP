<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/1
 * Time: 21:05
 */
class Person
{
    public $name;
    protected $str;
    protected $age = 27;
    private $sex = 'man';

    public function __construct()
    {
        $args = func_get_args();
//        foreach ($args as $arg) {
//            echo 'hello person ',$arg;
//            echo '<br />';
//        }
        $this->str = join(' ', $args);

    }

    public function __destruct()
    {
        $this->str;
        $this->age;

    }

    public function eat()
    {
        echo 'eating....';
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getStr(): string
    {
        return $this->str;
    }

    public function test(Person $test)
    {
        $test->str = 'test';
        return $test->str;
    }

}

;
$man = new Person('wang', 'dian', 'hai');
echo $man->getStr();
echo '<br />';
$man = null;
$women = new Person('zhang', 'xin');
echo '<br />';
//echo  $women -> name;
unset($women->name);
echo $women->getAge();
echo $women->getStr();
echo $women->test(new Person('test'));