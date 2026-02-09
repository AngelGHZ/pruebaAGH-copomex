<?php
use App\Http\Controllers\EstadoController;

Route::get('/', fn() => redirect()->route('estados.index'));

Route::get('/estados', [EstadoController::class, 'index'])->name('estados.index');
Route::get('/estados/{id}/municipios', [EstadoController::class, 'municipios'])->name('estados.municipios');

use Illuminate\Support\Facades\Artisan;

Route::get('/__deploy', function () {
    Artisan::call('migrate --force');
    Artisan::call('copomex:sync-estados');
    return nl2br(Artisan::output());
});
