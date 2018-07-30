<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Laravel\Lumen\Console\Kernel as ConsoleKernel;
use Symfony\Bundle\WebServerBundle\Command\ServerRunCommand;
use Symfony\Bundle\WebServerBundle\Command\ServerStartCommand;
use Symfony\Bundle\WebServerBundle\Command\ServerStatusCommand;
use Symfony\Bundle\WebServerBundle\Command\ServerStopCommand;


class Kernel extends ConsoleKernel
{
    protected $commands = [
        ServerStartCommand::class,
        ServerStopCommand::class,
        ServerStatusCommand::class,
        ServerRunCommand::class
    ];

    protected function schedule(Schedule $schedule)
    {

    }
}