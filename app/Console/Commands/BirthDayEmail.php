<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\BirthDayEmailJob;

class BirthDayEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'birthday:mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mail Send';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
         dispatch(new BirthDayEmailJob());
    }
}
