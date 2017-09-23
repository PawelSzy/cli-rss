<?php
Namespace PawelSzyHRtec\Src\Writer;
require_once __DIR__."/interfaces/ReadWriteInterface.php";
use PawelSzyHRtec\Src\myInterfaces\ReadWrite\Writeable;

class WriteCsv implements Writeable
{
    function write($array, $file, $append_to_end_of_file = true, $caption = array())
    {
        $f = $append_to_end_of_file ? fopen($file, "a") : fopen($file, "w");

        if(!$append_to_end_of_file)
        {
            fputcsv($f, $caption, ',');
        }


        foreach ($array as $obj)
        {
            fputcsv($f, $obj->to_array(), ',');
        }

        fclose($f);
    }
}