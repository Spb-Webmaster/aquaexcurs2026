<?php

namespace App\PDF;

use setasign\Fpdi\TcpdfFpdi;

class PdfService
{
    public static function replaceTextInPdf(string $inputFile, array $replacements, string $outputFile)
    {
        $pdf = new TcpdfFpdi();

        // Читаем первую страницу исходного PDF
        $pageCount = $pdf->setSourceFile($inputFile);
        $templateId = $pdf->importPage(1); // Берём только первую страницу

        // Получаем размеры страницы
        list($w, $h) = $pdf->getTemplateSize($templateId);

        // Добавляем страницу и прикладываем шаблон
        $pdf->AddPage('', [$w, $h], true, true);
        $pdf->useTemplate($templateId, 0, 0, $w, $h, true);

        // Проходим по всем заменам и ставим текст на странице
        foreach ($replacements as $item) {
            $newText = $item['text'];
            $xPosition = $item['x'];
            $yPosition = $item['y'];
            $fontSize = isset($item['fontSize']) ? $item['fontSize'] : 12;
            $color = isset($item['color']) ? $item['color'] : [0, 0, 0]; // Цвет текста RGB

            $pdf->SetTextColor(...$color); // Расширяем массив цвета в отдельные компоненты
            $pdf->SetFont('DejaVu Sans', '', $fontSize);
            $pdf->SetXY($xPosition, $yPosition);
            $pdf->Write(0, $newText);
        }

        // Сохраняем итоговый PDF-файл
        $pdf->Output($outputFile, 'F');
    }

}
