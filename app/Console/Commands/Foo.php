<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Foo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'foo:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        dd("adad");
    }
}
