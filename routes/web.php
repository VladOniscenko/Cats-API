<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [CatsController::class, 'info']);

Route::get('images/{filename}', function ($filename) {
    $path = public_path('images/' . $filename);

    if (!file_exists($path)) {
        $randomNumber = rand(1, 250);
        return redirect("images/cat_$randomNumber.jpg");
    }

    $file = file_get_contents($path);
    $type = mime_content_type($path);

    return response($file)->header('Content-Type', $type);
})->where('filename', '.*');