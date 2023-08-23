<?php
// app/Services/TemplateProcessorService.php

namespace App\Services;

use PhpOffice\PhpWord\TemplateProcessor;

class TemplateProcessorService
{
    public function processTemplate($templatePath, $data)
    {
        $templateProcessor = new TemplateProcessor($templatePath);

        foreach ($data as $placeholder => $value) {
            $templateProcessor->setValue($placeholder, $value);
        }

        return $templateProcessor->save();
    }
}
