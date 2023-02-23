<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use Picqer\Barcode\BarcodeGeneratorPNG;

class DocxController extends Controller
{
    public function generateDocx(Request $request)
    {
        // $doc = \PhpOffice\PhpWord\IOFactory::load(storage_path('app/public/Gracie Combatives Official Card.docx'));

        // Define the search and replace text
        // $oldText = array('First Name', 'Last Name');
        // $newText = array($request->input("first_name"), $request->input("last_name"));

        // Get all the paragraphs in the document
        // foreach ($doc->getSections() as $section) {
            // Loop through each paragraph and search and replace the text
            // foreach ($section->getElements() as $element) {
                // foreach ($elements as $element) {
                // if ($element instanceof \PhpOffice\PhpWord\Element\TextRun) {
                    // $texts = $element->getElements();
                    // foreach ($texts as $text) {
                        // if ($text instanceof \PhpOffice\PhpWord\Element\Text) {
                            // $text->setText(str_replace($oldText, $newText, $text->getText()));
                            // dd($text);
                        // }
                    // }
                // }
            // }
        // }

        // $doc->metadata['Settings']->setPdfRendererName(Settings::PDF_RENDERER_DOMPDF);
        // Any writable directory here. It will be ignored.
        // $doc->metadata['Settings']->setPdfRendererPath('.');

        // Save the updated .docx file
        // $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($doc);
        // $objWriter->save(storage_path('app/modified05.docx'));
// dd("Done");
        // Load the template .docx file
        $template = new TemplateProcessor(storage_path('app/public/Gracie_Combatives_Official_Card.dotx'));

        // Replace the first and last name
        $template->setValue('FirstName', $request->input('first_name'));
        $template->setValue('LastName', $request->input('last_name'));

        // Generate a barcode
        $generator = new BarcodeGeneratorPNG();
        $barcode = $generator->getBarcode($request->input('id_number'), $generator::TYPE_CODE_128);
        $template->setImageValue('BARCODE', $barcode);


        // Save the modified .docx file
        $template->saveAs(storage_path('app/modified05.docx'));

        // Download the modified .docx file
        return response()->download(storage_path('app/modified05.docx'));
    }
}

