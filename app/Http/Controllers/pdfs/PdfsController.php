<?php

namespace App\Http\Controllers\Pdfs;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfsController extends Controller
{
    private const CURRICULOS_PUBLICOS = [
        'pedro',
        'yas',
        'bruno',
        'gui',
        'dri',
        'herlan',
    ];

    // Gera somente o currículo público solicitado.
    public function gerapdf(string $param)
    {
        $param = strtolower(trim($param));

        if (! in_array($param, self::CURRICULOS_PUBLICOS, true)) {
            abort(404);
        }

        $pdf = Pdf::loadView('site.Curriculum.' . $param, ['param' => $param])
            ->setPaper('A4')
            ->setOptions([
                'dpi' => 150,
                'defaultFont' => 'sans-serif',
                'isRemoteEnabled' => true,
                'isHtml5ParserEnabled' => true,
            ]);

        return $pdf->stream('curriculo-' . $param . '.pdf');
    }
}
