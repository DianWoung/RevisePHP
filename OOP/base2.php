<?php
class Person{

    public $name;
    protected $age;
    static $sex = '男';
    private $doing;
    protected $data = [];

    public function __construct()
    {
        $this->age = date('Y',time())-1989;
    }

    /**
     * @return false|string
     */
    public function getAge()
    {
        return $this->age;
    }
//__set用来设置私有变量
    public function __set($pname,$pval)
    {
        if('age'==$pname){
            if($pval<=0){
                echo '非法值';
            }else{
                $this->$pname = $pval;
            }
        }
        echo '__set被调用了'.'<br />';
    }
    //__get用来获取私有变量
    public function __get($value)
    {
        echo '__get被调用了'.'<br />';
        if(isset($this->$value)){
            return ($this->$value);
        }else{
            return ;
        }
    }

    public function __isset($name)
    {
        echo '发生监测时触发'.'<br />';
        return isset($this->$name);
    }

    /**
     * @return mixed
     */
    public function __unset($name)
    {
        echo '发生销毁时触发'.'<br />';
        unset($this->$name);
    }

}

$wang = new Person();
echo $wang ->getAge();
$wang->age =0;
$wang->test = 1111;
echo $wang->age;
isset($wang->ptest);
unset($wang->data);

echo '<br />';
echo "0";