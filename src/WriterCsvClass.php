<?php
Namespace PawelSzyHRtec\Src\Writer;
require_once __DIR__."/interfaces/ReadWriteInterface.php";
use PawelSzyHRtec\Src\myInterfaces\ReadWrite\Writeable;

class WriteCsv implements Writeable
{
    function write($array, $file, $append_to_end_of_file = true, $caption = array())
    {
        //sprawdz czy istnieje plik
        $append_to_end_of_file = file_exists($file) ? $append_to_end_of_file : false;

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