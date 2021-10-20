<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CheckUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = '
        check:users
        {userId: Id of user to be fetched}
        {--verified: Gets count of verified users}
    ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get count of users on the platform';

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
        dump($this->option('verified'));
        echo User::count() . "\n";
    }
}
