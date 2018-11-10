<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('update', function(){
    $this->info('Обновление Laravel. Сделайте резервную копию перед обновлением!');
    if ($this->confirm('Начнем?')) {
        Artisan::call('composer update');
        $this->cooment('updated!');
    }
})->describe('Обновление Laravel');
