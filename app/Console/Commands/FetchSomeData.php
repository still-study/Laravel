<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use Illuminate\Console\Command;

class FetchSomeData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:fetch';


    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        while(true) {
            new Client();
            $data = \Http::get('https://jsonplaceholder.typicode.com/todos/1')->body();
            $this->info($data);

            sleep(2);
        }
    }
}
