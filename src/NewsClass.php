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

    public function get_caption()
    {
        return array_keys($this->to_array());
    }

    public function to_line()
    {
        return implode(', ', array_values($this->to_array()));
    }

    public function to_array()
    {
        return (array)$this;
    }
}