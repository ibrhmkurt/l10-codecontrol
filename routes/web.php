<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index', [
        'discount_codes' => \App\Models\Code::paginate(),
    ]);
});

Route::post('/', function () {

    $csv = \League\Csv\Reader::createFromPath(request()->file('csv_file')->getRealPath());
    $csv->setHeaderOffset(0);


    $discount_codes = [];

    foreach ($csv as $record) {
        $discount_codes[] = [
            'discount_code' => $record['Code'],
            'created_at' => now(),
            'updated_at' => now(),
        ];

        if (count($discount_codes) === 5000) {
            \App\Models\Code::insert($discount_codes);

            $discount_codes = [];
        }
    }

    return redirect()->back()->with('success', 'All Discount Code imported!!');
});

Route::get('/checkmonitor', [\App\Http\Controllers\DiscountCodeCheckController::class, 'index']);
Route::post('/code-control', [\App\Http\Controllers\DiscountCodeCheckController::class, 'codeControl']);

