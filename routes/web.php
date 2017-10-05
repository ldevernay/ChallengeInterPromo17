<?php
/*
-----------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return redirect('/login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/unauthorized', 'HomeController@unauthorized')->name('unauthorized');

Route::get('/language', 'HomeController@language')->name('language');

// Candidate routes
Route::get('/candidate/formation', 'Candidate\CandidateController@chooseFormation')->name('chooseFormation');
Route::get('/candidate/formation/store/{id}', 'Candidate\CandidateController@storeFormation')->name('storeFormation');

Route::get('/candidate/operationnal/choose', 'Candidate\CandidateController@chooseOperationnal')->name('chooseOperationnal');
Route::post('/candidate/operationnal/store', 'Candidate\CandidateController@storeOperationnal')->name('storeOperationnal');

Route::get('/candidate/administrative/choose', 'Candidate\CandidateController@chooseAdministrative')->name('chooseAdministrative');
Route::post('/candidate/administrative/store', 'Candidate\CandidateController@storeAdministrative')->name('storeAdministrative');

Route::get('/candidate/experience/choose', 'Candidate\CandidateController@chooseExperience')->name('chooseExperience');
Route::post('/candidate/experience/store', 'Candidate\CandidateController@storeExperience')->name('storeExperience');

Route::get('/candidate/coding/choose', 'Candidate\CandidateController@chooseCoding')->name('chooseCoding');
Route::post('/candidate/coding/store', 'Candidate\CandidateController@storeCoding')->name('storeCoding');

Route::get('/candidate/projection/choose', 'Candidate\CandidateController@chooseProjection')->name('chooseProjection');
Route::post('/candidate/projection/store', 'Candidate\CandidateController@storeProjection')->name('storeProjection');

Route::get('/candidate/application/confirm', 'Candidate\CandidateController@confirmSendApplication')->name('confirmSendApplication');
Route::post('/candidate/application/send', 'Candidate\CandidateController@sendApplication')->name('sendApplication');

Route::group(['middleware'=>'admin'], function () {
  // Admin panel
  Route::get('/admin', 'Admin\AdminController@index')->name('admin');
  // Formateur
  Route::get('/admin/former/list', 'Admin\FormerController@list')->name('formerList');
  Route::get('/admin/former/create', 'Admin\FormerController@create')->name('formerCreate');
  Route::post('/admin/former/store', 'Admin\FormerController@store')->name('formerStore');
  Route::get('/admin/former/show/{id}', 'Admin\FormerController@show')->name('formerShow');
  Route::get('/admin/former/edit/{id}', 'Admin\FormerController@edit')->name('formerEdit');
  Route::post('/admin/former/update/{id}', 'Admin\FormerController@update')->name('formerUpdate');
  Route::get('/admin/former/delete/{id}', 'Admin\FormerController@destroy')->name('formerDelete');
// Formation
  Route::get('/admin/formation/list', 'Admin\FormationController@list')->name('formationList');
  Route::get('/admin/formation/create', 'Admin\FormationController@formerCreate')->name('formationCreate');
  Route::post('/admin/formation/store', 'Admin\FormationController@store')->name('formationStore');
  Route::get('/admin/formation/show/{id}', 'Admin\FormationController@show')->name('formationShow');
  Route::get('/admin/formation/edit/{id}', 'Admin\FormationController@edit')->name('formationEdit');
  Route::post('/admin/formation/update/{id}', 'Admin\FormationController@update')->name('formationUpdate');
  Route::get('/admin/formation/delete/{id}', 'Admin\FormationController@destroy')->name('formationDelete');
}
);

Route::group(['middleware' => 'recruiter'], function () {
  Route::get('/recruiter', 'Recruiter\FormationController@recruiterIndex')->name('recruiterIndex');
  Route::get('/recruiter/formation/show/{id}', 'Recruiter\FormationController@recruiterFormationShow')->name('recruiterFormationShow');
  Route::get('/recruiter/formation/edit/{id}', 'Recruiter\FormationController@recruiterFormationEdit')->name('recruiterFormationEdit');
  Route::post('/recruiter/formation/update/{id}', 'Recruiter\FormationController@recruiterFormationUpdate')->name('recruiterFormationUpdate');
  Route::get('/recruiter/formation/candidates/show/{id}', 'Recruiter\CandidateController@recruiterFormationCandidatesShow')->name('recruiterFormationCandidatesShow');
  Route::get('/recruiter/formation/candidate/show/{id}', 'Recruiter\CandidateController@candidateFormationShow')->name('candidateFormationShow');
  Route::post('/recruiter/formation/candidate/update/{id}', 'Recruiter\CandidateController@candidateFormationUpdate')->name('candidateFormationUpdate');
  Route::get('/recruiter/formation/candidate/delete/{id}', 'Recruiter\CandidateController@candidateFormationDelete')->name('candidateFormationDelete');
});
