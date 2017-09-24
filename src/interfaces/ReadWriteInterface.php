<?php
namespace PawelSzyHRtec\Src\myInterfaces\ReadWrite;


// Declare the interface Readable
interface Readable
{
    public function read($source);
}

// Declare the interface Writeable
interface Writeable
{
    public function write($array, $source);
}