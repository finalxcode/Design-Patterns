<?php
/**
 * Desc: 老师类V2
 * Date: 2020-07-20
 * Author: <tao.shi@ifchange.com>
 */

namespace DesignPatterns;


use Cassandra\Collection;

class TeacherV2
{
    //命令班长统计班里有多少人
    public function command(GroupLeaderV2 $groupLeader) {
        //班长清点人数
        $groupLeader->countStudentsV2();
    }
}


//我们先看含义上半段， 不该有直接依赖关系的类之间，不要有依赖
//老师应该仅仅需要班长告诉班里有多少人就可以了
//但是现在在让班长清点班里人数的时候，老师还要创建学生的集合数据
//那么我们要如何修改，才能使其满足迪米特法则呢
//我们可以看teacherV2类


