<?php
namespace PawelSzyHRtec\Src\NewsCoordinator;
require_once 'NewsCoordinatorClass.php';
require_once __DIR__."/interfaces/ReadWriteInterface.php";
use PawelSzyHRtec\Src\myInterfaces\ReadWrite\Readable;
use PawelSzyHRtec\Src\myInterfaces\ReadWrite\Writeable;


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
        try
        {
            $this->information = $this->reader->read($url);
        }
        catch (Exception $e)
        {
            echo 'Bład: ',  $e->getMessage(), "\n";
        }

    }

    public function write_to_file($file_name, $apppend_to_end_of_file = true)
    {
        if($this->information)
        {
            $news_coord = new NewsCoordinator();
            $news_coord->read_from_xml($this->information);

            try
            {
                $this->writer->write($news_coord->get_array_of_news(), $file_name,
                    $apppend_to_end_of_file, $news_coord->get_caption());
            }
            catch (Exception $e)
            {
                echo 'Bład: ',  $e->getMessage(), "\n";
            }
        }
    }
}