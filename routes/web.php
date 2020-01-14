<?php

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
    return view('welcome');
});
Route::get('/btest', function () {
  //  return view('testbootstrap');  // Vraćeno pomoću helpera
   return View::make('testbootstrap', ['name' => 'Taylor']);   // radi sa Fascade statickim pristupom
    
})-> name('home');
Route::get('foo',function(){
    //echo "Hello world";  // Može i ovako
    return "Hello world";
});
//TODO isprobaj sa post formom
Route::match(['get', 'post'], '/radiigetipost', function () {
    return "ovo je pozvano ili sa get ili sa post";
});
// Ako rute imaju isto ime i metodu zadnja ruta će pregaziti prethodnu
Route::any('/radiigetipost', function () {
    return "ovo je pozvano sa bilo kojom rutom";
});
Route::redirect('/here', '/there', 500);

// Rute sa parametrima
Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});
Route::get('kvadriraj/{broj}', function ($broj) {
    return 'Kvadrat od '.$broj." je ".($broj*$broj);
});
Route::get('xcoord/{varx}/ycoord/{vary}', function ($x, $y) {
    return view('gchart',['x'=>$x,'y'=>$y]);
});

Route::get('users/{name}', function ($name) {
    echo "pozdrav ".$name;
})->where('name', '[A-Za-z]+')-> name('whatsmyname');

Route::get('users/{id}', function ($id) {
    echo "pozdrav nepoznati, tvoj id je".$id;
})->where('id', '[0-9]+')-> name('whatsmyid');

Route::middleware('over18')->get('over18/{age}',function($age){
    return "Dobrodošli, vi ste stariji od 18, imate ".$age;
}
)->name('over18');