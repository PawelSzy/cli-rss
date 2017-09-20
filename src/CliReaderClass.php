<?php
namespace PawelSzy\NewsCoordinator;
require 'NewsCoordinatorClass.php';

class CliReader
{
    private $information = null;

    public function __construct($reader, $writer)
    {
        $this->reader = $reader;
        $this->writer = $writer;
    }

    public function load_from_url($url)
    {
        $this->information = $this->reader->read($url);
    }

    public function write_to_file($file_name)
    {
        $news_coord = new NewsCoordinator();
        $news_coord->read_from_xml($this->information);

        $this->writer->write($news_coord->get_array_of_news(), $file_name);
    }
}