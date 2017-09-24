<?php
namespace PawelSzyHRtec\Src\NewsCoordinator;
use PawelSzyHRtec\Src\MyNews\News;
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
        foreach ($xml->item as $elem)
        {
            $news_array[] = new News(
                (string) $elem->title,
                (string) $elem->description,
                (string) $elem->link,
                (string) $elem->pubDate,
                (string) $elem->{'dc:creator'});
        }

        return $news_array;
    }

    public function get_caption()
    {
        return array_map('ucfirst', $this->news_set[0]->get_caption());
    }

    public function get_array_of_news()
    {
        $arr = [];

        foreach($this->news_set as $news)
        {
            $arr[] = $news;
        }

        return $arr;
    }
}

