<?php

namespace Joy\VoyagerBreadNote\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class BreadNote extends Command
{
    protected $name = 'joy-bread-note';

    protected $description = 'Joy VoyagerBreadNote';

    public function handle()
    {
        $this->output->title('Starting bread-note');

        // Your magic here

        $this->output->success('BreadNote successful');
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['arguement1', InputArgument::REQUIRED, 'The argument1 description'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            [
                'option1',
                'o',
                InputOption::VALUE_OPTIONAL,
                'The option1 description',
                config('joy-voyager-bread-note.option1')
            ],
        ];
    }
}
