<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Log;

class minutly extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:minutly';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Log::debug('inside minutly');
    }
}
