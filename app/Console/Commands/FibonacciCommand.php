<?php

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;

class FibonacciCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fibonacci {number}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get an array of ';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        try {
            $result = fiboSuite($this->argument('number'));
            array_map(function ($item) {
                $this->info($item);
            }, $result);
        } catch (Exception $exception) {
            $this->error("catched : {$exception->getMessage()}");
            return 1;
        }

        return 0;
    }
}
