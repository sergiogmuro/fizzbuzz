<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\FizzBuzzController;

class FizzBuzzCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fizzbuzz:run
                            {a : First value}
                            {b : Second value}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run fizzbuzz command.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $this->info('Starting...');
        $a = $this->argument('a');
        $b = $this->argument('b');
        $fizzbuzz = new FizzBuzzController();
        $fizzbuzz->index($a, $b);
        $this->info('Finished...');
    }
}
