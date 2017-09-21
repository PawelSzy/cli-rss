<?php
namespace PawelSzy\NewsCoordinator;
require_once 'NewsCoordinatorClass.php';
require_once __DIR__."/interfaces/ReadWriteInterface.php";
use PawelSzy\myInterfaces\ReadWrite\Readable;
use PawelSzy\myInterfaces\ReadWrite\Writeable;


class CliReader
{
    private $information = null;

    public function __construct(Readable $reader, Writeable $writer)
    {
        $this->reader = $reader;
        $this->writer = $writer;
    }

    public function load_from_url($url)
    {
        $this->information = $this->reader->read($url);
    }

    public function write_to_file($file_name, $apppend_to_end_of_file = true)
    {
        $news_coord = new NewsCoordinator();
        $news_coord->read_from_xml($this->information);

        $this->writer->write($news_coord->get_array_of_news(), $file_name,
            $apppend_to_end_of_file, $news_coord->get_caption());
    }
}