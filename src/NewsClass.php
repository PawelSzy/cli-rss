<?php
namespace PawelSzy\MyNews;

class News
{
    public function __construct($title, $description, $link, $pubDate, $creator)
    {

        $this->title = $title;
        $this->description = $description;
        $this->link = $link;
        $this->pubDate = date('Y-M-D H:i:s', strtotime($pubDate));
        $this->creator = $creator;
    }

    public function to_array()
    {
        return (array)$this;

//        'title' => $this->data->title = $title;
//        $this->data->description = $description;
//        $this->data->link = $link;
//        $this->data->pubDate = date('Y-M-D H:i:s', strtotime($pubDate));
//        $this->data->creator = $creator;
        
        
    }
}