<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// Post to homepage
Route::post('/', function (Request $request) {
    $args = $request->all();
    $response = false;
    switch ($args['action']) {
        // Encrypting a string
        case 'encrypt':
            // Let's make sure our system can handle it
            if ($args['rounds'] < '4' || $args['rounds'] > '18') {
                $response = [
                    'colour' => 'red',
                    'title' => 'Failed',
                    'subtitle' => 'Rounds usage not within allowed values',
                ];
                break;
            }
            $text = Hash::make($args['string'], [
                'rounds' => $args['rounds']
            ]);
            $response = [
                'colour' => 'teal',
                'title' => 'Success',
                'subtitle' => $text,
            ];
            break;

        // Checking an existing string and hash
        case 'decrypt':
            if (Hash::check($args['string'], $args['hash'])) {
                $response = [
                    'colour' => 'teal',
                    'title' => 'Success',
                    'subtitle' => 'String and Hash match!',
                ];
            } else {
                $response = [
                    'colour' => 'red',
                    'title' => 'Failed',
                    'subtitle' => 'String and Hash doesn\'t match!'
                ];
            }
            break;
        // Neither, weird.
        default:
            return view('index');
            break;
    }
    // dd($args);
    return view('index')->with(compact('response'));
});
