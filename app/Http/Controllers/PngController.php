<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Picqer\Barcode\BarcodeGeneratorPNG;

class PngController extends Controller
{
    public function addData(Request $request) {
        $originalImage = imagecreatefrompng(storage_path("app/public/{$request->input('belt')}.png") );

        $width = imagesx($originalImage);
        $height = imagesy($originalImage);

        $newImage = imagecreatetruecolor($width, $height);
        imagecopy($newImage, $originalImage, 0, 0, 0, 0, $width, $height);

        $text = "{$request->input('last_name')}, {$request->input('first_name')}";
        $color = imagecolorallocate($newImage, 0, 0, 0);
        $x = 20;
        $y = 20;

        // Insert text to the image
        imagestring($newImage, 5, $x, $y, $text, $color);

        // $x = 20;
        $y = 40;
        // Generate a barcode
        $generator = new BarcodeGeneratorPNG();
        $barcode = $generator->getBarcode($request->input('id_number'), $generator::TYPE_CODE_128);
        $barcode_image = imagecreatefromstring($barcode);

        // Insert barcode to the image
        imagecopy($newImage, $barcode_image, $x, $y, 0, 0, imagesx($barcode_image), imagesy($barcode_image));
        imagestring($newImage, 5, $x, $y + 30, $request->input('id_number'), $color);

        //Resize
        imagescale( $newImage, 816, 529);

        // Save the modified .png file
        imagepng($newImage, storage_path("app/{$request->input('belt')}.png") );

        // Download the modified .png file
        return response()->download(storage_path("app/{$request->input('belt')}.png"));
    }
}
