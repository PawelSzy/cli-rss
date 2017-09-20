<?php
namespace PawelSzy\XML;
use PawelSzy\MyNews\News;

class Xml_to_news
{
    public static function convert_xml($xml)
    {
        $news_array = [];

        foreach($xml->channel->item as $elem) {
            $news_array[] = new News((string)$elem->title, (string)$elem->description, (string)$elem->link, (string)$elem->pubDate, (string)$elem->creator);
        }

        return $news_array;
    }
}