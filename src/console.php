<?php
//namespace SammyK\Skeleton;
require_once 'ReaderClass.php';
use PawelSzy\Reader\ConsoleReaderClass;

$commands = [];
$commands = ConsoleReaderClass::get_commands($argv) ;

foreach($commands as $command) {
    print $command;
    print "\n";
}

var_dump(RssReaderClass::read($commands['url']));

