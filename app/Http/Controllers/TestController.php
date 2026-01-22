<?php

namespace App\Http\Controllers;


use App\PDF\PdfService;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{


    public function test()
    {


        $originalPdfPath = storage_path('app/public/test/2/input.pdf'); // Исходный PDF
        $modifiedPdfPath = storage_path('app/public/test/2/output.pdf'); // Результирующий PDF

        // Массив заменяемых выражений
        $replacements = [
            ['text' => 'Новый текст 1',
                'x' => 10,
                'y' => 10
            ],
            ['text' => 'Старый текст 2',
                'x' => 100,
                'y' => 30,
                'fontSize' => 16,
                'color' => [255, 0, 0],
            ],
        ];

        // Выполняем замену текста
        PdfService::replaceTextInPdf(
            $originalPdfPath,
            $replacements,
            $modifiedPdfPath
        );

        // Возвращаем готовый PDF-файл клиенту
        // return response()->file($modifiedPdfPath);


        //flash()->info('Hello');


        return view('test', [
            ]
        );
    }


    public function test_pdf()
    {

        $pdf = Pdf::loadView('pdf.invoice1', []);
        $tempPath = Storage::disk('public')->path('/test/invoice.pdf');
        $content = $pdf->output();
        return file_put_contents($tempPath, $content);


        //  return $pdf->stream('invoice.pdf');
        //  return $pdf->download('invoice.pdf');

    }


}
