<?php
//namespace SammyK\Skeleton;
require 'ReaderClass.php';
use PawelSzy\Skeleton\ReaderClass;

$commands = [];
$commands = ReaderClass::get_commands($argv) ;

//$commands['command_type'] = $argv[0];
//$commands['url'] = $argv[1];
//$commands['write_to'] = $argv[2];

foreach($commands as $command) {
    print $command;
    print "\n";
}

