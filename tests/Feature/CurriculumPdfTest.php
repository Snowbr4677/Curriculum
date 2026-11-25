<?php

namespace Tests\Feature;

use App\Http\Controllers\pdfs\PdfsController;
use Tests\TestCase;

class CurriculumPdfTest extends TestCase
{
    public function test_a_curriculum_pdf_is_generated_using_local_assets(): void
    {
        $response = app(PdfsController::class)->gerapdf('jv');

        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame('application/pdf', $response->headers->get('Content-Type'));
        $this->assertStringStartsWith('%PDF-', $response->getContent());
        $this->assertStringContainsString('/Subtype /Image', $response->getContent());
    }
}
