<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;
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
    $data = collect([
        [
            'company_name' => 'Abc Company',
            'location' => 'hyderabad'
        ],
        [
            'company_name' => 'Abcd Company',
            'location' => 'chennai'
        ]
    ]);
     Session::put('companies', $data);

     $input = 'Abcd Company';
     $location = 'chennaii';
     $company = Session::get('companies');


     if($company->contains('company_name', $input) && $company->contains('location', $location))
     {
        dump('company already exists');
     }
     else
     {
        $newCompany = [...$data, ['company_name' => $input, 'location' => $location ]];
        Session::put('companies', $newCompany);
     }
    return view('welcome');
});

Route::view('/create-project', 'create-project')->name('create-project');
Route::view('/project-details', 'project-details')->name('project-details');
Route::view('/docs', 'docs');
Route::view('/apply-project', 'apply-project');
/* Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */
