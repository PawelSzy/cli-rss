<?php
Namespace PawelSzy\Writer;
require_once __DIR__."/interfaces/ReadWriteInterface.php";
use PawelSzy\myInterfaces\ReadWrite\Writeable;

class WriteCsv implements Writeable
{
    function write($array, $file, $apppend_to_end_of_file = true, $caption = "")
    {

        $f = $apppend_to_end_of_file ? fopen($file, "a") : fopen($file, "w");

        if($apppend_to_end_of_file)
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