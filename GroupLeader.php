<?php
/**
 * Desc: 班长类
 * Date: 2020-07-20
 * Author: <tao.shi@ifchange.com>
 */

namespace DesignPatterns;


use Cassandra\Collection;

class GroupLeader
{
    public function countStudents(Collection $students) {
        echo "总共有多少个学生" . $students->count(), PHP_EOL;
    }
}