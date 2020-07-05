<?php
namespace DesignPatterns;


class DocumentFactory
{
    private $htmlDownloader;

    public function __construct(HtmlDownloader $htmlDownloader)
    {
        $this->htmlDownloader = $htmlDownloader;
    }

    public function createDocument($url) {
        $html = $this->htmlDownloader->downloadHtml($url);
        return new DocumentV2($url, $html);
    }
}

//我们来使用一个工厂方法来创建document