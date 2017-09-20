<?php

class RssReaderClass
{
    public static function read($url)
    {
        $rss = Feed::loadRss($url);

        return $rss;
    }
}