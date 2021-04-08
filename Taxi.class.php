<?php

class Taxi extends Car
{
    private $passenger;

    public function __construct($name, $number, $color)
    {
        parent::__construct($name, $number, $color);
    }

    public function pickUp($count)
    {
        $this->passenger += $count;
        return strval($count) . "人乗車しました\n";
    }

    public function lower($count)
    {
        if ($this->passenger - $count >= 0) {
            $this->passenger -= $count;
            return strval($count) . "人降車しました\n";
        } else {
            return strval($count) . "人は降車できません\n";
        }
    }

    public function information()
    {
        return  parent::information() .
                '乗車人数:' . $this->passenger . "人\n";
    }
}
