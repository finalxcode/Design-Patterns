<?php
/**
 * Desc: 咖啡机类V2
 * Date: 2020-07-20
 * Author: <tao.shi@ifchange.com>
 */

namespace DesignPatterns;


class CoffeeMachineV2
{
    //加咖啡豆
    private function addCoffeeBean() {
        echo "加咖啡豆", PHP_EOL;
    }

    //加水
    private function addWater() {
        echo "加水", PHP_EOL;
    }

    //磨出咖啡
    private function makeCoffee() {
        echo "磨出咖啡", PHP_EOL;
    }

    //磨出咖啡V2
    public function makeCoffeeV2() {
        $this->addCoffeeBean();
        $this->addWater();
        $this->makeCoffee();
    }


}