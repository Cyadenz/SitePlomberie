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

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/Erreur', function () {
    return view('Erreur');
});

//Routes Sidebar
Route::get('/', 'SideBarControlleur@index')->name('accueil');
Route::get('/services', 'SideBarControlleur@services')->name('services');
Route::get('/apropos', 'SideBarControlleur@apropos')->name('àpropos');

Route::get('/contacter', 'SideBarControlleur@contacter')->name('contacter');
Route::post('/contacter', 'SideBarControlleur@store2')->name('contactStore');

Route::get('/devis', 'SideBarControlleur@devis')->name('devis');
Route::post('/devis', 'SideBarControlleur@store')->name('devisStore');

//Routes Utilisateur
Route::get('/monProfil', 'UserControlleur@index')->name('monProfil');
Route::post('/monProfil', 'UserControlleur@store')->name('monProfilEdit');
Route::get('/mot_de_passe_oublie', 'UserControlleur@oublieMdp')->name('oublieMdp');

//Routes Admin protégées par middleware
Route::get('/adminDashboard',['middleware' => ['auth', 'admin'], 'uses' => 'AdminControlleur@index'])->name('adminDashboard');
Route::get('/adminUtilisateurs',['middleware' => ['auth', 'admin'], 'uses' => 'AdminControlleur@Util'])->name('adminUtilisateurs');
Route::get('/adminSuppresion/{id}',['middleware' => ['auth', 'admin'], 'uses' => 'AdminControlleur@Suppresion'])->name('utilSupp');

Route::get('/profilEdit/{id}',['middleware' => ['auth', 'admin'], 'uses' => 'AdminControlleur@UtilSelect'])->name('profilSelect');
Route::post('/profilEdit/{id}',['middleware' => ['auth', 'admin'], 'uses' => 'AdminControlleur@store'])->name('profilEdit');

Route::get('/adminDevis',['middleware' => ['auth', 'admin'], 'uses' => 'AdminControlleur@devis'])->name('adminDevis');
Route::get('/adminSuppresionDevis/{id}',['middleware' => ['auth', 'admin'], 'uses' => 'AdminControlleur@SuppresionDevis'])->name('devisSupp');
Route::get('/devis/{id}',['middleware' => ['auth', 'admin'], 'uses' => 'AdminControlleur@DevisSelect'])->name('devisSelect');

Route::get('/adminContact',['middleware' => ['auth', 'admin'], 'uses' => 'AdminControlleur@demande'])->name('adminContact');
Route::get('/adminSuppresionDemande/{id}',['middleware' => ['auth', 'admin'], 'uses' => 'AdminControlleur@SuppresionDemande'])->name('demandeSupp');
Route::get('/adminContact/{id}',['middleware' => ['auth', 'admin'], 'uses' => 'AdminControlleur@demandeSelect'])->name('demandeSelect');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
