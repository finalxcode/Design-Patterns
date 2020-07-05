<?php
namespace DesignPatterns;


class HtmlDownloader
{
    /**
     * 根据url下载html内容
     * @param $url
     * @return bool|string
     */
    public function downloadHtml($url) {
        $content = file_get_contents($url);
        return $content;
    }
}