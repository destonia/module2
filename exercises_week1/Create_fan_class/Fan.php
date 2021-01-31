<?php


namespace Fan;


class Fan
{
    public $slow = 1;
    public $medium = 2;
    public $fast = 3;
    private $speed;
    private $on = false;
    private $radius;
    private $color ;

    public function __construct()
    {
        $this->speed=$this->slow;
    }


}