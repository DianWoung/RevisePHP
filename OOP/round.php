<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/3
 * Time: 20:39
 */
class RandomString{
    private $length;
    private $type;

    public function __construct($type,$length)
    {
        $this->type=$type;
        $this->length=$length;
    }

    /**
     * @return mixed
     */
    public function getRanddomString()
    {
        switch ($this->type)
        {
            case 1;
            return join(array_rand(range(0,9),$this->length));
            break;
            case 2;
            return join(array_rand(array_flip(array_merge(range('a','z'),range('A','Z'))),$this->length));
            break;
            case 3;
            return join(array_rand(array_flip(array_merge(range('a','z'),range('A','Z'),range(0,9))),$this->length));
            break;
        }
    }
}
$str = new RandomString(3,6);
echo $str->getRanddomString();
echo '<pre>';
$arr =  array_flip(array_merge(range('a','z'),range('A','Z'),range(0,9)));
print_r($arr);