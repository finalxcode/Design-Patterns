<?php
namespace DesignPatterns;

/**
 * Class ChartDisplay
 * @package DesignPatterns
 */
class ChartDisplay
{
    const CHART_TYPE_PIE = 'pie';
    const CHART_TYPE_LINE = 'line';

    public function display($type) {
        if ($type == self::CHART_TYPE_PIE) {
            $pieChart = new PieChart();
            $pieChart->display();
        } else if ($type == self::CHART_TYPE_LINE) {
            $lineChart = new LineChart();
            $lineChart->display();
        }
    }
}

//上面一个图表显示类可以显示饼图和折线图，如果这个时候我们想要显示柱状图，怎么办？
//就需要增加一个柱状图的类，同时修改chartdispaly类中display的显示方法，这就破坏了开闭原则。
//开闭原则要求对扩展开放，对修改关闭。虽然我们实现了扩展，但是修改了chartdisplay类
//有没有办法来达到我们既支持扩展，又对修改关闭呢？
//我们定义abstractChartDisplay抽象类，让piechart和linechart类作为其子类



//上层模块不应该依赖下层模块，两者都应该依赖其抽象
//在这里我们将chartDisplay看做上层模块，它依赖pieChart和lineChart模块，也就是下层模块
//这样是没有问题，但是对于扩展性不好，因此在开闭原则里面，我们抽象出了abstractChartDisplay
//让下层模块pieChart和lineChart模块，依赖这个抽象abstractChartDisplay，下层模块来实现这个抽象abstractChartDisplay
//从而将依赖实现了从上层模块依赖下层模块，转变成了下层模块要依赖上层抽象的转变, 这就是依赖倒置
