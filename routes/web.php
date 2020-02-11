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

Route::get('/', function () {  return view('index');  });

Auth::routes();


Route::get('/home', 'AdminShowController@ShowConducteurs');// modifier



Route::get('/compte', 'AdminShowController@Compte');   





/* ADD post */


Route::post('AddAssurance', 'AdminAddController@AddAssurance');

Route::post('AddControle', 'AdminAddController@AddControle');

Route::post('AddVéhicule', 'AdminAddController@AddVéhicule');

Route::post('AddConducteur', 'AdminAddController@AddConducteur');

Route::post('AddAffectation', 'AdminAddController@AddAffectation');

Route::post('AddIncident', 'AdminAddController@AddIncident');




/* ADD get */


Route::get('AddAssurance', 'GET_AdminAddController@GET_AddAssurance');

Route::get('AddControle', 'GET_AdminAddController@GET_AddControle');

Route::get('AddVéhicule', 'GET_AdminAddController@GET_AddVéhicule');

Route::get('AddConducteur', 'GET_AdminAddController@GET_AddConducteur');




/* Delete */



Route::post('/DeleteConducteur/{id}', 'AdminDeleteController@DeleteConducteur');

Route::post('/DeleteAssurance/{id}', 'AdminDeleteController@DeleteAssurance');

Route::post('/DeleteControle/{id}', 'AdminDeleteController@DeleteControle');

Route::post('/DeleteVéhicule/{id}', 'AdminDeleteController@DeleteVéhicule');

Route::post('/DeleteIncidents/{id}', 'AdminDeleteController@DeleteIncidents');

Route::post('/DeleteAffectation/{id}', 'AdminDeleteController@DeleteAffectation');



/*  Edite post*/


Route::post('/UpdateConducteur/{id}', 'AdminEditController@UpdateConducteur');

Route::post('/UpdateAssurance/{id}', 'AdminEditController@UpdateAssurance');

Route::post('/UpdateControle/{id}', 'AdminEditController@UpdateControle');

Route::post('/UpdateVehicule/{id}', 'AdminEditController@UpdateVehicule');

Route::post('/UpdateIncidents/{id}', 'AdminEditController@UpdateIncidents');

Route::post('/UpdateAffectation/{id}', 'AdminEditController@UpdateAffectation');


/*  Edite get*/


Route::get('/GET_UpdateConducteur/{id}', 'GET_AdminEditController@GET_UpdateConducteur');

Route::get('/GET_UpdateAssurance/{id}', 'GET_AdminEditController@GET_UpdateAssurance');

Route::get('/GET_UpdateControle/{id}', 'GET_AdminEditController@GET_UpdateControle');

Route::get('/GET_UpdateVehicule/{id}', 'GET_AdminEditController@GET_UpdateVehicule');

Route::get('/GET_UpdateIncidents/{id}', 'GET_AdminEditController@GET_UpdateIncidents');

Route::get('/Get_UpdateAffectation/{id}', 'GET_AdminEditController@Get_UpdateAffectation');



/* SHOW  */



Route::get('/ShowAssurance', 'AdminShowController@ShowAssurance');

Route::get('/ShowControle', 'AdminShowController@ShowControle');

Route::get('/ShowCars', 'AdminShowController@ShowCars');

Route::get('/ShowConducteurs', 'AdminShowController@ShowConducteurs');

Route::get('/ShowAffectation', 'AdminShowController@ShowAffectation');

Route::get('/ShowIncidents', 'AdminShowController@ShowIncidents');

