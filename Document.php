<?php
namespace DesignPatterns;


class Document
{
    private $html;
    private $url;

    public function __construct($url)
    {
        $this->url = $url;
        $downloader = new HtmlDownloader();
        $this->html = $downloader->downloadHtml($url);
    }
}

// 我们先看含义上半段， 不该有直接依赖关系的类之间，不要有依赖
//上面的代码有两个问题
//第一， htmlDownloader对象在构造函数中通过new来创建，违反了基于接口儿非实现变成的设计思想
//第二，从业务含义上讲，document网页文档没必要依赖htmlDownloader类，违背了迪米特法则

//document应该仅仅依赖两个属性$url和$html，还要实现基于接口的变成思想，我们该怎么做？
//使其满足迪米特法则

// 下面我们来看含义的下半段，有依赖关系的类之间，尽量只依赖必要的接口



