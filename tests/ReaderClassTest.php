<?php
use PawelSzy\Reader\ReaderClass;
require __DIR__.'/../src/ReaderClass.php';

class ReaderClassTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test that true does in fact equal true
     */
    public function testReader()
    {
        $arg = ['', 'csv:simple', 'http://feeds.nationalgeographic.com/ng/News/News_Main',  'eksport_prosty.csv'];
        $commands = ReaderClass::get_commands($arg);

        $this->assertEquals($commands, array(
            'command_type' =>'csv:simple',
            'url' => 'http://feeds.nationalgeographic.com/ng/News/News_Main',
            'write_to' => 'eksport_prosty.csv'));
    }
}
