<?php
namespace Cn3ya\MicroService;

use \Illuminate\Support\ServiceProvider as Base;

class ServiceProvider extends Base {
    public function boot() {
        $this->commands([
            FooCommand::class,
            BarCommand::class,
        ]);
    }
}
