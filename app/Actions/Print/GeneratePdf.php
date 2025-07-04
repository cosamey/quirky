<?php

namespace App\Actions\Print;

use Spatie\Browsershot\Browsershot;
use Spatie\LaravelPdf\Enums\Format;
use Spatie\LaravelPdf\Facades\Pdf;

class GeneratePdf
{
    /** @param array<string, mixed> $data */
    public function execute(string $view, array $data): string
    {
        return Pdf::portrait()
            ->format(Format::A4)
            ->withBrowsershot(function (Browsershot $browsershot): void {
                $browsershot->noSandbox()
                    ->setOption('preferCSSPageSize', true);
            })
            ->view($view, $data)
            ->base64();
    }
}
