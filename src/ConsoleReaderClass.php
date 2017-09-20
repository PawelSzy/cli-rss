<?php
namespace PawelSzy\Reader;

class ConsoleReaderClass
{
    public static function get_commands($arguments)
    {
        $commands = [];

        $commands['command_type'] = $arguments[1];
        $commands['url'] = $arguments[2];
        $commands['write_to'] = $arguments[3];

        return $commands;
    }
}