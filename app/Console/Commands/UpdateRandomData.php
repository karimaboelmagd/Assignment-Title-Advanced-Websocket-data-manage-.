<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\GenerateRandomDataController;

class UpdateRandomData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-random-data';

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
        $controller = new GenerateRandomDataController();

        while (true) {
            $controller->handleRandomData();
            sleep(1);
        }
    }
}
