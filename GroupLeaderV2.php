<?php
/**
 * Desc: 班长类V2
 * Date: 2020-07-20
 * Author: <tao.shi@ifchange.com>
 */

namespace DesignPatterns;


use Cassandra\Collection;

class GroupLeaderV2
{

    private $students;

    public function __construct()
    {
        $this->students = new Collection();
        for ($i = 0; $i < 50; $i++) {
            $this->students->add(new Student());
        }
    }


    public function countStudentsV2() {
        echo "总共有多少个学生" . $this->students->count();
    }
}