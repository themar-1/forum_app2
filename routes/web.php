<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\StagiaireController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BackupController;



Route::get('/', fn () => view('index'))->name('acceuil');
Route::get('/about', fn () => view('about'))->name('about');
Route::get('/inscription', fn () => view('inscription'))->name('inscription');
Route::get('/reservationrdv', fn () => view('reservationrdv'))->name('reservationrdv');
Route::get('/invitation', fn () => view('invitation'))->name('invitation');
Route::get('/contact', fn () => view('contact'))->name('contact');


Auth::routes();


Route::post('/getstagiairebycindatenaissanceinscription', [App\Http\Controllers\inscriptionController::class, 'getstagiairebycindatenaissance'])->name('getstagiairebycindatenaissanceinscription');
Route::post('/getstagiairebycindatenaissancereservation', [App\Http\Controllers\reservationController::class, 'getstagiairebycindatenaissance'])->name('getstagiairebycindatenaissancereservation');
Route::patch('/enregistrerinscription', [App\Http\Controllers\inscriptionController::class, 'enregistrerInscription'])->name('enregistrerinscription');
// Route::get('/annulerinscription/{cin}', [App\Http\Controllers\inscriptionController::class, 'annulerInscription'])->name('annulerinscription');





Route::post('/SendMessge', [MessageController::class, "SendMessge"])->name('sendMessge');


// Admin Routes
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/student/delete/{id}', [AdminController::class, 'deleteStudent'])->name('student.delete');
    Route::get('/', [AdminController::class, "index"])->name('index');
    Route::get('/dashboard', [AdminController::class, "dashboard"])->name('dashboard');
    Route::get('/analytics', [AdminController::class, "analytics"])->name('analytics');
    Route::get('/message', [AdminController::class, "message"])->name('message');
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
        Route::get('/stagiaire', [AdminController::class, "ajouterStagiaire"])->name('ajouter_S');
        Route::get('/entreprise', [AdminController::class, "ajouterEntreprise"])->name('ajouter_E');
        Route::get('/admin', [AdminController::class, "ajouterAdmin"])->name('ajouter_A');
        Route::get('/etablissement', [AdminController::class, "ajouterEtab"])->name('ajouter_etab');
        Route::post('/addAdmin', [AdminController::class, "add_a"])->name('add_A');
        Route::post('/addEntreprises', [AdminController::class, "add_e"])->name('add_E');
        Route::post('/addStagiaire', [AdminController::class, "add_s"])->name('add_S');
        Route::post('/addEtab', [AdminController::class, "add_etab"])->name('add_Etab');
    });
});

Route::post('/apply-for-interview/{entrepriseId}', [ApplicationController::class, "applyForInterview"])->name('apply-for-interview');




// Stagiaires list
// Route::resource('stagiaires', StagiaireController::class);
// Route::resource('entreprises', entrepriseController::class);
Route::post('/presence/{cin}', [StagiaireController::class, 'marquerPresent'])->name('marquerPresent');
Route::post('/cv/download', [AdminController::class, 'downloadCv'])->name('downloadCV');
Route::post('/cv/view', [AdminController::class, 'viewCv'])->name('viewCV');


Route::resources([
    'stagiaires' => stagiaireController::class,
    'entreprises' => entrepriseController::class,

]);


// Route qui permet de connaître la langue active
Route::get('local', [LocalizationController::class, 'getLang'])->name('getlang');

// Route qui permet de modifier la langue
Route::get('local/{lang}', [LocalizationController::class, 'setLang'])->name('setlang');




Route::get('/test-contact', function () {
    return new App\Mail\Contact([
        'nom' => 'Durand',
        'email' => 'hachem.elharrak@yahoo.fr',
        'message' => 'Je voulais vous dire que votre site est magnifique !'
    ]);
});

Route::get('/login', [EntrepriseController::class, 'loginIndex'])->name('login');
Route::post('/login', [EntrepriseController::class, 'login'])->name('login.action');
Route::get('/entreprise/dashboard', [EntrepriseController::class, 'dashboard'])->name('entreprise.dashboard');
Route::get('/entreprise/logout', [EntrepriseController::class, 'logout'])->name('entreprise.logout');
Route::post('/showcv', [EntrepriseController::class, 'showCv'])->name('showCVs');