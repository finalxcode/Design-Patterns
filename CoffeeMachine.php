<?php
/**
 * Desc: 咖啡机类
 * Date: 2020-07-20
 * Author: <tao.shi@ifchange.com>
 */

namespace DesignPatterns;


class CoffeeMachine
{
    //加咖啡豆
    public function addCoffeeBean() {
        echo "加咖啡豆", PHP_EOL;
    }

    //加水
    public function addWater() {
        echo "加水", PHP_EOL;
    }

    //磨出咖啡
    public function makeCoffee() {
        echo "磨出咖啡", PHP_EOL;
    }
}