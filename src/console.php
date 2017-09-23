<?php
//namespace SammyK\Skeleton;
require_once 'ConsoleReaderClass.php';
require_once 'RssReaderClass.php';
require_once 'CliReaderClass.php';
require_once 'WriterCsvClass.php';
use PawelSzyHRtec\Src\Reader\ConsoleReaderClass;
use PawelSzyHRtec\Src\Rss\RssReaderClass;
use PawelSzyHRtec\Src\NewsCoordinator\CliReader;
use \PawelSzyHRtec\Src\Writer\WriteCsv;

$commands = [];
$commands = ConsoleReaderClass::get_commands($argv) ;

If(!$commands['command_type'] || !$commands['url'] || !$commands['write_to'])
{
    print "Niepoprawna komenda";
    return null;
}

$apppend_to_end = explode(":", $commands['command_type'])[1] == 'simple' ? false : true ;

$my_reader = new CliReader(new RssReaderClass(), new WriteCsv());

$my_reader->load_from_url($commands['url']);

print "Pobrano dane z adresu: ".$commands['url'];
print "\n";

$my_reader->write_to_file($commands['write_to'], $apppend_to_end);

print "Dane zostaly zapisane do pliku: ".$commands['write_to'];
print "\n";

