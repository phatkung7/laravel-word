<?php
// app/Services/HtmlToWordConverterService.php

namespace App\Services;

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Shared\Html;
use PhpOffice\PhpWord\IOFactory;

class HtmlToWordConverterService
{
    public function convertHtmlToWord($html, $outputPath)
    {
        $phpWord = new PhpWord();
        $section = $phpWord->addSection();

        // Convert HTML to Word
        Html::addHtml($section, $html);

        // Save the document
        $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save($outputPath);
    }
}
