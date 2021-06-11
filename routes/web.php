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
    return redirect(route('home'));
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'fournisseur'], function () {
    Route::get('/', [App\Http\Controllers\FournisseurController::class, 'index'])->name('fournisseur');

    Route::get('/add', function(){
        return view('fournisseur.add');
    })->name('fournisseur.add');
    Route::post('/add/data', [App\Http\Controllers\FournisseurController::class,'add'])->name('fournisseur.add.data');

    Route::get('/update', function(){
        $fournisseur = App\Fournisseur::find(Request::get("id"));
        return view('fournisseur.update',['founisseur'=>$fournisseur]);
    })->name('fournisseur.update');
    Route::post('/update/data', [App\Http\Controllers\FournisseurController::class,'update'])->name('fournisseur.update.data');
    Route::get('/delete/', [App\Http\Controllers\FournisseurController::class, 'destroy'])->name('fournisseur.delete');
});

Route::group(['prefix' => 'client'], function () {
    Route::get('/', [App\Http\Controllers\ClientController::class, 'index'])->name('client');

    Route::get('/add', function(){
        return view('clients.add');
    })->name('client.add');
    Route::post('/add/data', [App\Http\Controllers\ClientController::class,'add'])->name('client.add.data');

    Route::get('/update', function(){
        $client = App\Client::find(Request::get("id"));
        return view('clients.update',['client'=>$client]);
    })->name('client.update');
    Route::post('/update/data', [App\Http\Controllers\ClientController::class,'update'])->name('client.update.data');
    Route::get('/delete/', [App\Http\Controllers\ClientController::class, 'destroy'])->name('client.delete');
});

Route::group(['prefix' => 'engin'], function () {
    Route::get('/', [App\Http\Controllers\EnginController::class, 'index'])->name('engin');

    Route::get('/add', function(){
        return view('engin.add');
    })->name('engin.add');
    Route::post('/add/data', [App\Http\Controllers\EnginController::class,'add'])->name('engin.add.data');

    Route::get('/update', function(){
        $engin = App\Engin::find(Request::get("id"));
        return view('engin.update',['engin'=>$engin]);
    })->name('engin.update');
    Route::post('/update/data', [App\Http\Controllers\EnginController::class,'update'])->name('engin.update.data');
    Route::get('/delete/', [App\Http\Controllers\EnginController::class, 'destroy'])->name('engin.delete');
});
Route::group(['prefix' => 'chauffeur'], function () {
    Route::get('/', [App\Http\Controllers\ChauffeurController::class, 'index'])->name('chauffeur');

    Route::get('/add', function(){
        return view('chauffeur.add');
        })->name('chauffeur.add');
        Route::post('/add/data', [App\Http\Controllers\ChauffeurController::class,'add'])->name('chauffeur.add.data');

        Route::get('/update', function(){
            $chauffeur = App\Chauffeur::find(Request::get("id"));
            return view('chauffeur.update',['chauffeur'=>$chauffeur]);
        })->name('chauffeur.update');
        Route::post('/update/data', [App\Http\Controllers\ChauffeurController::class,'update'])->name('chauffeur.update.data');
        Route::get('/delete/', [App\Http\Controllers\ChauffeurController::class, 'destroy'])->name('chauffeur.delete');
});
Route::group(['prefix' => 'contrat'], function () {
    Route::get('/', [App\Http\Controllers\ContratController::class, 'index'])->name('contrat');

    Route::get('/add', function(){
        return view('contrat.add');
    })->name('contrat.add');
    Route::post('/add/data', [App\Http\Controllers\ContratController::class,'add'])->name('contrat.add.data');

    Route::get('/update', function(){
        $contrat = App\Contrat::find(Request::get("id"));
        return view('contrat.update',['contrat'=>$contrat]);
    })->name('contrat.update');
    Route::post('/update/data', [App\Http\Controllers\ContratController::class,'update'])->name('contrat.update.data');
    Route::get('/delete/', [App\Http\Controllers\ContratController::class, 'destroy'])->name('contrat.delete');
});
Route::group(['prefix' => 'contrat_detail'], function () {
    
    Route::get('/', [App\Http\Controllers\Contrat_detailController::class, 'index'])->name('contrat_detail');
    
    Route::get('/add', function(){
        return view('contrat_detail.add');
    })->name('contrat_detail.add');
    Route::post('/add/data', [App\Http\Controllers\Contrat_detailController::class,'add'])->name('contrat_detail.add.data');

    Route::get('/update', function(){
        $contrat_detail = App\ContratDetail::find(Request::get("id"));
        return view('contrat_detail.update',['contrat_detail'=>$contrat_detail]);
    })->name('contrat_detail.update');
    Route::post('/update/data', [App\Http\Controllers\Contrat_detailController::class,'update'])->name('contrat_detail.update.data');
    Route::get('/delete/', [App\Http\Controllers\Contrat_detailController::class, 'destroy'])->name('contrat_detail.delete');
});
Route::group(['prefix' => 'apporteurs_affaire'], function () {
    Route::get('/', [App\Http\Controllers\ApporteursAffaireController::class, 'index'])->name('apporteurs_affaire');

    Route::get('/add', function(){
        return view('apporteurs_affaire.add');
    })->name('apporteurs_affaire.add');
    Route::post('/add/data', [App\Http\Controllers\ApporteursAffaireController::class,'add'])->name('apporteurs_affaire.add.data');

    Route::get('/update', function(){
        $apporteurs_affaire = App\ApporteursAffaire::find(Request::get("id"));
        return view('apporteurs_affaire.update',['apporteurs_affaire'=>$apporteurs_affaire]);
    })->name('apporteurs_affaire.update');
    Route::post('/update/data', [App\Http\Controllers\ApporteursAffaireController::class,'update'])->name('apporteurs_affaire.update.data');
    Route::get('/delete/', [App\Http\Controllers\ApporteursAffaireController::class, 'destroy'])->name('apporteurs_affaire.delete');
});
Route::group(['prefix' => 'devi'], function () {
    Route::get('/', [App\Http\Controllers\DeviController::class, 'index'])->name('devi');

    Route::get('/add', function(){
        return view('devi.add');
    })->name('devi.add');
    Route::post('/add/data', [App\Http\Controllers\DeviController::class,'add'])->name('devi.add.data');
    
    Route::get('/update', function(){
        $devi = App\Devi::find(Request::get("id"));
        return view('devi.update',['devi'=>$devi]);
    })->name('devi.update');
    
    Route::post('/update/data', [App\Http\Controllers\DeviController::class,'update'])->name('devi.update.data');
    
    Route::get('/delete/', [App\Http\Controllers\DeviController::class, 'destroy'])->name('devi.delete');
    
});
Route::group(['prefix' => 'devis_detail'], function () {
    Route::get('/', [App\Http\Controllers\Devis_detailController::class, 'index'])->name('devis_detail');

    Route::get('/add', function(){
        return view('devis_detail.add');
    })->name('devis_detail.add');
    Route::post('/add/data', [App\Http\Controllers\Devis_detailController::class,'add'])->name('devis_detail.add.data');
    
    Route::get('/update', function(){
        $devis_detail = App\DevisDetail::find(Request::get("id"));
        return view('devis_detail.update',['devis_detail'=>$devis_detail]);
    })->name('devis_detail.update');
    
    Route::post('/update/data', [App\Http\Controllers\Devis_detailController::class,'update'])->name('devis_detail.update.data');
    
    Route::get('/delete/', [App\Http\Controllers\Devis_detailController::class, 'destroy'])->name('devis_detail.delete');
    
});
