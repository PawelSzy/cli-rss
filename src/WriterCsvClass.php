<?php
Namespace PawelSzy\Writer;

class WriteCsv
{
    function write($array, $file)
    {
        $f = fopen($file, "w");
        foreach ($array as $obj)
        {
            fputcsv($f, $obj->to_line());
        }

        fclose($f);
    }
}