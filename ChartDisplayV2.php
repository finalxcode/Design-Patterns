<?php
namespace DesignPatterns;

/**
 * Class ChartDisplay
 * @package DesignPatterns
 */
class ChartDisplayV2
{
    public function display(AbstractChartDisplay $chart) {
        return $chart->display();
    }
}

//上面一个图表显示类可以显示饼图和折线图，如果这个时候我们想要显示柱状图，怎么办？
//就需要增加一个柱状图的类，同时修改chartdispaly类中display的显示方法，这就破坏了开闭原则。
//开闭原则要求对扩展开放，对修改关闭。虽然我们实现了扩展，但是修改了chartdisplay类
//有没有办法来达到我们既支持扩展，又对修改关闭呢？
//我们定义abstractChartDisplay抽象类，让piechart和linechart类作为其子类