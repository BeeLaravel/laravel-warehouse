<?php
namespace Cn3ya\MicroService;

class WarehouseServiceProvider extends \Illuminate\Support\ServiceProvider {
    public function boot() {
        $this->commands([
            // FooCommand::class,
            // BarCommand::class,
        ]);
    }
}
