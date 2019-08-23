<?php
namespace BeeSoft\Warehouse;

use Illuminate\Console\Command;

class StartServiceCommand extends Command {
    protected $signature = 'service:start-server';
    protected $description = 'start a service server';

    public function handle() {
        echo "test";
    }
}
