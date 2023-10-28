<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BackupController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\entrepriseController;
use App\Http\Controllers\StagiaireController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\PdfController;

Route::get('/', fn() => view('index'))->name('acceuil');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/inscription', fn() => view('inscription'))->name('inscription');
Route::get('/reservationrdv', fn() => view('reservationrdv'))->name('reservationrdv');
Route::get('/invitation', fn() => view('invitation'))->name('invitation');
Route::get('/contact', fn() => view('contact'))->name('contact');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/getstagiairebycindatenaissanceinscription', [App\Http\Controllers\inscriptionController::class, 'getstagiairebycindatenaissance'])->name('getstagiairebycindatenaissanceinscription');
Route::post('/getstagiairebycindatenaissancereservation', [App\Http\Controllers\reservationController::class, 'getstagiairebycindatenaissance'])->name('getstagiairebycindatenaissancereservation');
Route::patch('/enregistrerinscription', [App\Http\Controllers\inscriptionController::class, 'enregistrerInscription'])->name('enregistrerinscription');
// Route::get('/annulerinscription/{cin}', [App\Http\Controllers\inscriptionController::class, 'annulerInscription'])->name('annulerinscription');





// Admin Routes
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/student/delete/{id}', [AdminController::class, 'deleteStudent'])->name('student.delete');
    Route::get('/', [AdminController::class, "index"])->name('index');
    Route::get('/dashboard', [AdminController::class, "dashboard"])->name('dashboard');
    Route::post('/auth', [AdminController::class, "handleLogin"])->name('handleLogin');
    Route::post('/logout', [AdminController::class, "logout"])->name('logout');
    Route::group(['prefix' => 'backup', 'as' => 'backup.'], function () {
        Route::get('/', [BackupController::class, "index"])->name('index');
        Route::post('/importStagiaires', [BackupController::class, "importStagiaires"])->name('importStagiaires');
        Route::get('/exportStagiaires', [BackupController::class, "exportStagiaires"])->name('exportStagiaires');
        Route::post('/importEntreprises', [BackupController::class, "importEntreprises"])->name('importEntreprises');
        Route::get('/exportEntreprises', [BackupController::class, "exportEntreprises"])->name('exportEntreprises');
        Route::post('/importEtablissements', [BackupController::class, "importEtablissements"])->name('importEtablissements');
        Route::get('/exportEtablissements', [BackupController::class, "exportEtablissements"])->name('exportEtablissements');
    });
    Route::group(['prefix' => 'ajouter', 'as' => 'ajouter.'], function () {
        Route::get('/stagiaire', [AdminController::class, "AjouterStagiaire"])->name('ajouter_S');
        Route::get('/entreprises', [AdminController::class, "AjouterEntreprises"])->name('ajouter_E');
        Route::get('/admin', [AdminController::class, "AjouterAdmin"])->name('ajouter_A');
        Route::post('/addAdmin', [AdminController::class, "add_a"])->name('add_A');
        

    });
});

Route::post('/apply-for-interview/{entrepriseId}', [ApplicationController::class, "applyForInterview"])->name('apply-for-interview');
Route::get('/generate-pdf', [PdfController::class,"generatePdf"])->name('generatepdf');




// Stagiaires list
Route::resource('stagiaires', StagiaireController::class);
Route::resource('entreprises', entrepriseController::class);
Route::post("/login",[entrepriseController::class,"handlelogin"])->name('login');
Route::post('/presence/{cin}', [StagiaireController::class, 'marquerPresent'])->name('marquerPresent');
Route::post('/cv/download', [AdminController::class, 'downloadCv'])->name('downloadCV');
Route::post('/cv/view', [AdminController::class, 'viewCv'])->name('viewCV');











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
