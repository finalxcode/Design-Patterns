<?php
/**
 * Desc: 老师类
 * Date: 2020-07-20
 * Author: <tao.shi@ifchange.com>
 */

namespace DesignPatterns;


use Cassandra\Collection;

class Teacher
{
    //命令班长统计班里有多少人
    public function command(GroupLeader $groupLeader) {
        $students = new Collection();
        for ($i = 0; $i < 50; $i++) {
            $students->add(new Student());
        }

        //班长清点人数
        $groupLeader->countStudents($students);
    }
}


// 我们先看含义上半段， 不该有直接依赖关系的类之间，不要有依赖
//老师应该仅仅需要班长告诉班里有多少人就可以了
//但是现在在让班长清点班里人数的时候，老师还要创建学生的集合数据


