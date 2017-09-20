<?php
namespace PawelSzy\NewsCoordinator;
use PawelSzy\MyNews\News;
require 'NewsClass.php';

class NewsCoordinator
{
    protected $news_set = [];

    public function read_from_xml($xml)
    {
        $this->news_set = self::convert_xml($xml);
    }

    public static function convert_xml($xml)
    {
        $news_array = [];

        foreach ($xml->channel->item as $elem)
        {
            $news_array[] = new News((string) $elem->title, (string) $elem->description, (string) $elem->link, (string) $elem->pubDate, (string) $elem->creator);
        }

        return $news_array;
    }

    public function get_caption()
    {
        return $this->news_set[0]->get_caption();
    }
}

