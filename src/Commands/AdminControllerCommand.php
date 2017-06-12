<?php

namespace Bpocallaghan\Generators\Commands;

class AdminControllerCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'generate:admin_controller';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new admin controller class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'admin_controller';
}