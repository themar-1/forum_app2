<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\entrepriseController;
use App\Http\Controllers\StagiaireController;
use App\Http\Controllers\QrCodeController;

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

Route::get('/', fn () => view('index'))->name('acceuil');
Route::get('/about', fn () => view('about'))->name('about');
Route::get('/inscription', fn () => view('inscription'))->name('inscription');
Route::get('/reservationrdv', fn () => view('reservationrdv'))->name('reservationrdv');
Route::get('/invitation', fn () => view('invitation'))->name('invitation');
Route::get('/contact', fn () => view('contact'))->name('contact');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/qrcode', [qrCodeController::class, 'index']);
Route::post('/getstagiairebycindatenaissanceinscription', [App\Http\Controllers\inscriptionController::class, 'getstagiairebycindatenaissance'])->name('getstagiairebycindatenaissanceinscription');
Route::post('/getstagiairebycindatenaissancereservation', [App\Http\Controllers\reservationController::class, 'getstagiairebycindatenaissance'])->name('getstagiairebycindatenaissancereservation');
Route::patch('/enregistrerinscription', [App\Http\Controllers\inscriptionController::class, 'enregistrerInscription'])->name('enregistrerinscription');
Route::get('/annulerinscription/{cin}', [App\Http\Controllers\inscriptionController::class, 'annulerInscription'])->name('annulerinscription');





// Route qui permet de connaître la langue active
Route::get('local', [LocalizationController::class, 'getLang'])->name('getlang');

// Route qui permet de modifier la langue
Route::get('local/{lang}', [LocalizationController::class, 'setLang'])->name('setlang');

Route::resources([
    'stagiaires' => stagiaireController::class,
    'entreprises' => entrepriseController::class,

]);


Route::get('/test-contact', function () {
    return new App\Mail\Contact([
        'nom' => 'Durand',
        'email' => 'hachem.elharrak@yahoo.fr',
        'message' => 'Je voulais vous dire que votre site est magnifique !'
    ]);
});
