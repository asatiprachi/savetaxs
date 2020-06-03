<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/h', function () {
    return view('hh');
});
Route::get('/registration', function(){ 
    return view('registration');
});
Route::get('/login', function(){ 
    return view('login');
});
/*service-pages Routes*/
Route::get('/accounts', function () {
    return view('service-pages.account');
});
Route::get('/fundrasing', function () {
    return view('service-pages.fundrasing');
});
Route::get('/businessloan', function () {
    return view('service-pages.businessloan');
});
Route::get('/businessplan', function () {
    return view('service-pages.businessplan');
});
Route::get('/Caste', function () {
    return view('service-pages.caste');
});
Route::get('/caveat', function () {
    return view('service-pages.caveatpetition');
});
Route::get('/complaine', function () {
    return view('service-pages.complaine');
});
Route::get('/conjugal', function () {
    return view('service-pages.conjugal');
});
Route::get('/copyright', function () {
    return view('service-pages.copyright');
});
Route::get('/digitalsignature', function () {
    return view('service-pages.digisignatur');
});
Route::get('/esi', function () {
    return view('service-pages.esi');
});
Route::get('/fssai', function () {
    return view('service-pages.fssai');
});
Route::get('/genderchange', function () {
    return view('service-pages.genderChange');
});
Route::get('/GSTReturn', function () {
    return view('service-pages.GSTReturn');
});
Route::get('/importer', function () {
    return view('service-pages.importercode');
});
Route::get('/iso', function () {
    return view('service-pages.ISO');
});
Route::get('/itr', function () {
    return view('service-pages.itr');
});
Route::get('/legalheir', function () {
    return view('service-pages.legalheir');
});
Route::get('/legalnotice', function () {
    return view('service-pages.legalnotic');
});
Route::get('/llp', function () {
    return view('service-pages.llp');
});
Route::get('/moneyrecovery', function () {
    return view('service-pages.moneyrecovery');
});
Route::get('/msme', function () {
    return view('service-pages.msme');
});
Route::get('/namechange', function () {
    return view('service-pages.namechange');
});
Route::get('/NGO', function () {
    return view('service-pages.NGO');
});
Route::get('/Nidhi', function () {
    return view('service-pages.nidhicom');
});
Route::get('/onepersoncompany', function () {
    return view('service-pages.oneperson');
});
Route::get('/otherservice', function () {
    return view('service-pages.otherservice');
});
Route::get('/partnership', function () {
    return view('service-pages.partnership');
});
Route::get('/patent', function () {
    return view('service-pages.patent');
});
Route::get('/pf', function () {
    return view('service-pages.pf');
});
Route::get('/privatelimitedcompany', function () {
    return view('service-pages.privatelimcom');
});
Route::get('/producer', function () {
    return view('service-pages.producercom');
});
Route::get('/professionaltax', function () {
    return view('service-pages.professnaltax');
});
Route::get('/proprietorship', function () {
    return view('service-pages.propertoship');
});
Route::get('/propertyregistration', function () {
    return view('service-pages.propertyreg');
});
Route::get('/propertyverify', function () {
    return view('service-pages.propertyverify');
});
Route::get('/public', function () {
    return view('service-pages.public');
});
Route::get('/relinquish', function () {
    return view('service-pages.relinquish');
});
Route::get('/residential', function () {
    return view('service-pages.residential');
});
Route::get('/shopANDestablishment', function () {
    return view('service-pages.shopANDestablishment');
});
Route::get('/succession', function () {
    return view('service-pages.succession');
});
Route::get('/tax', function () {
    return view('service-pages.tax');
});
Route::get('/tds', function () {
    return view('service-pages.tds');
});
Route::get('/trade', function () {
    return view('service-pages.trade');
});
Route::get('/trademark', function () {
    return view('service-pages.trademark');
});
Route::get('/web-and-app', function () {
    return view('service-pages.web-and-app');
});
Route::get('/will', function () {
    return view('service-pages.will');
});
/* end service-pages */



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
