<?php
//namespace SammyK\Skeleton;
require_once 'ConsoleReaderClass.php';
require_once 'RssReaderClass.php';
require_once 'CliReaderClass.php';
require_once 'WriterCsvClass.php';
use PawelSzy\Reader\ConsoleReaderClass;
use PawelSzy\Rss\RssReaderClass;
use PawelSzy\NewsCoordinator\CliReader;
use \PawelSzy\Writer\WriteCsv;

$commands = [];
$commands = ConsoleReaderClass::get_commands($argv) ;

foreach($commands as $command) {
    print $command;
    print "\n";
}

$my_reader = new CliReader(new RssReaderClass(), new WriteCsv());

$my_reader->load_from_url($commands['url']);
$my_reader->write_to_file($commands['write_to']);

