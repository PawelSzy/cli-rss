<?php
Namespace PawelSzy\Writer;

class WriteCsv
{
    function write($array, $file, $apppend_to_end_of_file = true, $caption = "")
    {

        $f = $apppend_to_end_of_file ? fopen($file, "a") : fopen($file, "w");

        if($apppend_to_end_of_file)
        {
            fputcsv($f, implode($caption), ',');

        }

        foreach ($array as $obj)
        {
            fputcsv($f, $obj->to_array(), ',');
        }

        fclose($f);
    }
}