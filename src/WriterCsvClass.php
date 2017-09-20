<?php
use PawelSzy\MyNews\News;

class WriteCsv
{
    static function write($array, $file)
    {
        $f = fopen($file, "w");
        foreach ($array as $obj)
        {
            fputcsv($f, $obj->to_array());
        }

        fclose($f);
    }
}