<?php
/**
 * Desc: 员工类
 * Date: 2020-07-20
 * Author: <tao.shi@ifchange.com>
 */

namespace DesignPatterns;


class Staff
{
    public function makeCoffee(CoffeeMachine $coffeeMachine) {
        $coffeeMachine->addCoffeeBean();
        $coffeeMachine->addWater();
        $coffeeMachine->makeCoffee();
    }
}

//现在来讲讲迪米特法则后半部分， 有依赖关系的类之间，尽量只依赖必要的接口
//上面员工想要磨咖啡，那么就使用了咖啡机的类，看起来没什么问题, 仅仅依赖了有关系的类，
//但是是否只依赖必要的接口呢？ 答案是否定的
//员工没必要知道咖啡是怎么通过咖啡机磨出来，员工仅仅关注的是让咖啡机磨出咖啡来就可以了
//那么我们如何修改才能使其满足迪米特法则呢