<?php
namespace PawelSzy\Reader;

class News
{
    public function __construct($title, $description, $link, $pubDate, $creator)
    {
        $this->data = [];
        
        $this->data->title = $title;
        $this->data->description = $description;
        $this->data->link = $link;
        $this->data->pubDate = date('Y-M-D H:i:s', strtotime($pubDate));
        $this->data->creator = $creator;
    }

    public function to_array()
    {
        return $this->data;
    }
}