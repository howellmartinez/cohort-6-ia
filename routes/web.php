<?php

use App\Models\Animal;
use Illuminate\Support\Facades\Route;

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

// MVC
// M - Model
// V - View
// C - Controller

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    $name = "Cat";
    return view('hi', [
        'display' => $name,
        'company' => 'Dogs Inc.'
    ]);
});

Route::get('animals/create', function () {
    return view('animals_create');
});

Route::post('create_animal', function () {
    $name = request()->input('name');
    $age = request()->input('age');
    $species = request()->input('species');

    // Animal::create([
    //     'name' => $name,
    //     'age' => $age,
    //     'species' => $species,
    // ]);

    $animal = new Animal();
    $animal->name = $name;
    $animal->age = $age;
    $animal->species = $species;
    $animal->save();

    return redirect('/animals/create');
});
