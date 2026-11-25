<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    // Nomes públicos permitidos nesta versão do projeto.
    // Isso evita que a URL tente carregar qualquer arquivo Blade existente no sistema.
    private const CURRICULOS_PUBLICOS = [
        'pedro',
        'yas',
        'bruno',
        'gui',
        'dri',
        'herlan',
        'alan',
        'lucas',
    ];

    public function __construct()
    {
    	/* $this->middleware('auth')->only([ '' ]);*/
    }

    public function quemsomos()
    {
        return view('Site/quemsomos');
    }

    public function curriculum($param)
    {
        $param = strtolower(trim((string) $param));

        if (! in_array($param, self::CURRICULOS_PUBLICOS, true)) {
            abort(404);
        }

        return view("Site/Curriculum/{$param}");
    }

    public function construindo()
    {
        return redirect()->route('construindo') ;
    }

}
