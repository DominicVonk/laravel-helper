<?php

namespace LaravelHelper\Processes;

use LaravelHelper\Interfaces\IRunnable;

class LaravelRoot extends BaseProcess implements IRunnable
{
    /**
     * @var string
     */
    public $message = 'Checking if it is the root dir';

    /**
     * @var array
     */
    protected $command = ['php', 'artisan'];

    /**
     * @var string
     */
    protected $reason = 'It is not the root of Laravel';
}
