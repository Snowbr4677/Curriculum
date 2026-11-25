<?php

namespace App\Http\Controllers\pdfs;

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
        'alan',
        'lucas',
        'jv',
    ];

    // Gera somente o currículo público solicitado.
    public function gerapdf(string $param)
    {
        $param = strtolower(trim($param));

        if (! in_array($param, self::CURRICULOS_PUBLICOS, true)) {
            abort(404);
        }

        $assetRoot = rtrim(asset(''), '/') . '/';
        $html = view('site.Curriculum.' . $param, ['param' => $param])->render();
        $html = preg_replace_callback(
            '~<link\b(?=[^>]*\brel=["\']stylesheet["\'])[^>]*>~i',
            function (array $matches) use ($assetRoot): string {
                if (! preg_match('~\bhref=["\']([^"\']+)["\']~i', $matches[0], $href)) {
                    return $matches[0];
                }

                $path = $this->localAssetPath($href[1], $assetRoot);

                if ($path === null) {
                    return $matches[0];
                }

                $stylesheet = file_get_contents($path);

                if ($stylesheet === false) {
                    throw new \RuntimeException("Unable to read PDF stylesheet: {$path}");
                }

                return "<style>\n{$stylesheet}\n</style>";
            },
            $html
        );
        $html = preg_replace_callback(
            '~\bsrc=(["\'])([^"\']+)\1~i',
            function (array $matches) use ($assetRoot): string {
                $path = $this->localAssetPath($matches[2], $assetRoot);

                if ($path === null) {
                    return $matches[0];
                }

                $image = file_get_contents($path);
                $imageInfo = getimagesize($path);

                if ($image === false || $imageInfo === false) {
                    throw new \RuntimeException("Unable to read PDF image: {$path}");
                }

                $dataUri = 'data:' . $imageInfo['mime'] . ';base64,' . base64_encode($image);

                return 'src=' . $matches[1] . $dataUri . $matches[1];
            },
            $html
        );

        $pdf = Pdf::loadHTML($html)
            ->setPaper('A4')
            ->setOptions([
                'dpi' => 150,
                'defaultFont' => 'sans-serif',
                'isRemoteEnabled' => false,
                'isHtml5ParserEnabled' => true,
                'chroot' => base_path(),
            ]);

        return $pdf->stream('curriculo-' . $param . '.pdf');
    }

    private function localAssetPath(string $url, string $assetRoot): ?string
    {
        $url = html_entity_decode($url, ENT_QUOTES, 'UTF-8');

        if (! str_starts_with($url, $assetRoot)) {
            return null;
        }

        return public_path(rawurldecode(substr($url, strlen($assetRoot))));
    }
}
