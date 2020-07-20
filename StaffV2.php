<?php
/**
 * Desc: 员工类V2
 * Date: 2020-07-20
 * Author: <tao.shi@ifchange.com>
 */

namespace DesignPatterns;


class StaffV2
{
    public function makeCoffee(CoffeeMachineV2 $coffeeMachine) {
        $coffeeMachine->makeCoffeeV2();
    }
}

//就是让员工去让咖啡机磨出咖啡来，然后本身不关注莫咖啡的过程
//从而仅仅只依赖有限的知识。