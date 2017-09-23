<?php
namespace PawelSzyHRtec\Src\Rss;
require_once __DIR__."/interfaces/ReadWriteInterface.php";
use PawelSzyHRtec\Src\myInterfaces\ReadWrite\Readable;

require __DIR__.'/../vendor/dg/rss-php/src/Feed.php';
use Feed;

class RssReaderClass implements Readable
{
    public function read($url)
    {
        $rss = Feed::loadRss($url);

        return $rss;
    }
}