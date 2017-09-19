<?php
namespace PawelSzy\Skeleton;

class ReaderClass
{
    public static function get_commands($arguments)
    {
        $commands = [];

        $commands['command_type'] = $arguments[0];
        $commands['url'] = $arguments[1];
        $commands['write_to'] = $arguments[2];

        return $commands;
    }
}