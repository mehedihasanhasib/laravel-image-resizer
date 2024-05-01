<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function resizer(Request $request)
    {
        if ($request->hasFile('image')) {
            $filename = $request->file('image');
            list($original_width, $original_height) = getimagesize($filename);
            $original_image = imagecreatefromjpeg($filename);
            $resized_image = imagecreatetruecolor(300, 300);

            // Resize the original image to fit the new dimensions
            imagecopyresampled($resized_image, $original_image, 0, 0, 0, 0, 300, 300, $original_width, $original_height);

            // Save the resized image to a file
            $file_name = time() . $filename->getClientOriginalName();
            $path =  public_path() . '/product_images';
            imagejpeg($resized_image, $path . '/' . $file_name);
        }
    }
}
