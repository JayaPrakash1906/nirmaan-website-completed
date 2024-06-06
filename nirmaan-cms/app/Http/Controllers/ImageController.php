<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function show($path)
{
    $path = storage_path('app/' . $path);// Assuming the images are stored in the storage/app/public directory
    
    if (file_exists($path)) {
        return response()->file($path);
    } else {
        return response()->json(['message' => 'Image not found'], 404);
    }
}
}
