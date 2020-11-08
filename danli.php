<?php
//单例模式
class dl{
    static private $instance;

    private function __construct()
    {
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function getInstance(){
        if (!self::$instance instanceof self){
            self::$instance = new self();
        }

        return self::$instance;
    }
}

//递归
function dg($n){
    if ($n == 1 || $n == 2){
        return 1;
    }

    return dg($n-1)+dg($n-2);
}

//