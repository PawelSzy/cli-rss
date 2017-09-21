<?php
namespace PawelSzy\Rss;
require_once __DIR__."/interfaces/ReadWriteInterface.php";
use PawelSzy\myInterfaces\ReadWrite\Readable;

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