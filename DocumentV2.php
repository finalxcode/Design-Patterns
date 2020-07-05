<?php
namespace DesignPatterns;


class DocumentV2
{
    private $html;
    private $url;

    public function __construct($url, $html)
    {
        $this->html = $html;
        $this->url = $url;
    }
}