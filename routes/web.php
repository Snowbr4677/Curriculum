<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\pdfs\PdfsController;

/*
|--------------------------------------------------------------------------
| Rotas Públicas
|--------------------------------------------------------------------------
*/
Route::get('/', fn() => view('welcome'))->name('raiz');
Route::get('testes/ping', fn() => response()->json(['ok' => true]))->name('testes.ping');

Route::get('/config', fn() => response()->json([
    'APP_NAME'     => env('APP_NAME'),
    'APP_URL'      => env('APP_URL'),
    'APP_TIMEZONE' => env('APP_TIMEZONE'),
]));

Route::get('status_banco', function () {
    try {
        DB::connection()->getPdo();
        return response()->json(['success' => true, 'mensagem' => 'Conexão com o banco OK']);
    } catch (\PDOException $e) {
        return response()->json([
            'success'  => false,
            'erro'     => 'Erro ao conectar ao banco de dados.',
            'detalhes' => $e->getMessage(),
        ], 500);
    }
});

/*
|--------------------------------------------------------------------------
| Site
|--------------------------------------------------------------------------
*/
Route::prefix('site')->group(function () {
    Route::any('quemsomos', [\App\Http\Controllers\Site\SiteController::class, 'quemsomos'])->name('quemsomos');
    Route::get('curriculum/{param?}', [\App\Http\Controllers\Site\SiteController::class, 'curriculum']);
});
Route::get('gerapdf/{param?}', [PdfsController::class, 'gerapdf'])->name('gerapdf');