<?php
namespace PawelSzy\Rss;

require __DIR__.'/../vendor/dg/rss-php/src/Feed.php';
use Feed;

class RssReaderClass
{
    public static function read($url)
    {
        $rss = Feed::loadRss($url);

        return $rss;
    }
}