<?php
//namespace SammyK\Skeleton;
require_once 'ReaderClass.php';
use PawelSzy\Reader\ReaderClass;

$commands = [];
$commands = ReaderClass::get_commands($argv) ;

foreach($commands as $command) {
    print $command;
    print "\n";
}

var_dump(ReaderClass::read_from_url($commands['url']));

