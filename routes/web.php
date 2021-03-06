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

// Candidate routes
Route::get('/candidate/formation', 'CandidateController@chooseFormation')->name('chooseFormation');
Route::get('/candidate/formation/store/{id}', 'CandidateController@storeFormation')->name('storeFormation');

Route::get('/candidate/civil/choose', 'CandidateController@chooseCivil')->name('chooseCivil');
Route::post('/candidate/civil/store', 'CandidateController@storeCivil')->name('storeCivil');

Route::get('/candidate/hero/choose', 'CandidateController@chooseHero')->name('chooseHero');
Route::post('/candidate/hero/store', 'CandidateController@storeHero')->name('storeHero');
Route::get('/candidate/experience/choose', 'CandidateController@chooseExperience')->name('chooseExperience');
Route::post('/candidate/experience/store', 'CandidateController@storeExperience')->name('storeExperience');
Route::get('/candidate/hack/choose', 'CandidateController@chooseHack')->name('chooseHack');
Route::post('/candidate/hack/store', 'CandidateController@storeHack')->name('storeHack');
Route::get('/candidate/course/choose', 'CandidateController@chooseCourse')->name('chooseCourse');
Route::post('/candidate/course/store', 'CandidateController@storeCourse')->name('storeCourse');
Route::get('/candidate/superpower/choose', 'CandidateController@chooseSuperpower')->name('chooseSuperpower');
Route::post('/candidate/superpower/store', 'CandidateController@storeSuperpower')->name('storeSuperpower');
Route::get('/candidate/motivation/choose', 'CandidateController@chooseMotivation')->name('chooseMotivation');
Route::post('/candidate/motivation/store', 'CandidateController@storeMotivation')->name('storeMotivation');

Route::get('/candidate/leisure/choose', 'CandidateController@chooseLeisure')->name('chooseLeisure');
Route::post('/candidate/leisure/store', 'CandidateController@storeLeisure')->name('storeLeisure');

Route::get('/candidate/profile/choose', 'CandidateController@chooseProfile')->name('chooseProfile');
Route::post('/candidate/profile/store', 'CandidateController@storeProfile')->name('storeProfile');
Route::get('/candidate/badges/refresh', 'CandidateController@refreshBadges')->name('refreshBadges');

Route::get('/candidate/availability/choose', 'CandidateController@chooseAvailability')->name('chooseAvailability');
Route::post('/candidate/availability/store', 'CandidateController@storeAvailability')->name('storeAvailability');

Route::get('/candidate/followup/choose', 'CandidateController@chooseFollowup')->name('chooseFollowup');
Route::post('/candidate/followup/store', 'CandidateController@storeFollowup')->name('storeFollowup');

Route::get('/candidate/prescriber/choose', 'CandidateController@choosePrescriber')->name('choosePrescriber');
Route::post('/candidate/prescriber/store', 'CandidateController@storePrescriber')->name('storePrescriber');

Route::get('/candidate/activity_before/choose', 'CandidateController@chooseActivityBefore')->name('chooseActivityBefore');
Route::post('/candidate/activity_before/store', 'CandidateController@storeActivityBefore')->name('storeActivityBefore');

Route::get('/admin/pro_experience/list', 'ProExperienceController@list')->name('proExperienceList');
Route::get('/admin/pro_experience/create', 'ProExperienceController@create')->name('proExperienceCreate');
Route::post('/admin/pro_experience/add', 'ProExperienceController@add')->name('proExperienceAdd');
Route::get('/admin/pro_experience/show/{id}', 'ProExperienceController@show')->name('proExperienceShow');
Route::get('/admin/pro_experience/edit/{id}', 'ProExperienceController@edit')->name('proExperienceEdit');
Route::get('/admin/pro_experience/delete/{id}', 'ProExperienceController@destroy')->name('proExperienceDelete');
Route::post('/admin/pro_experience/store', 'ProExperienceController@store')->name('proExperienceStore');
Route::post('/admin/pro_experience/update/{id}', 'ProExperienceController@update')->name('proExperienceUpdate');

Route::get('/admin/paid_formation/list', 'PaidFormationController@list')->name('paidFormationList');
Route::get('/admin/paid_formation/create', 'PaidFormationController@create')->name('paidFormationCreate');
Route::post('/admin/paid_formation/add', 'PaidFormationController@add')->name('paidFormationAdd');
Route::get('/admin/paid_formation/show/{id}', 'PaidFormationController@show')->name('paidFormationShow');
Route::get('/admin/paid_formation/edit/{id}', 'PaidFormationController@edit')->name('paidFormationEdit');
Route::get('/admin/paid_formation/delete/{id}', 'PaidFormationController@destroy')->name('paidFormationDelete');
Route::post('/admin/paid_formation/store', 'PaidFormationController@store')->name('paidFormationStore');
Route::post('/admin/paid_formation/update/{id}', 'PaidFormationController@update')->name('paidFormationUpdate');

Route::get('/candidate/pro_project/choose', 'CandidateController@chooseProProject')->name('chooseProProject');
Route::post('/candidate/pro_project/store', 'CandidateController@storeProProject')->name('storeProProject');

Route::get('/candidate/situation/choose', 'CandidateController@chooseSituation')->name('chooseSituation');
Route::post('/candidate/situation/store', 'CandidateController@storeSituation')->name('storeSituation');

Route::group(['middleware'=>'admin'], function () {
  // Admin panel
  Route::get('/admin', 'AdminController@index')->name('admin');
  // Formateur
  Route::get('/admin/former/list', 'FormerController@list')->name('formerList');
  Route::get('/admin/former/create', 'FormerController@create')->name('formerCreate');
  Route::post('/admin/former/add', 'FormerController@add')->name('formerAdd');
  Route::get('/admin/former/show/{id}', 'FormerController@show')->name('formerShow');
  Route::get('/admin/former/edit/{id}', 'FormerController@edit')->name('formerEdit');
  Route::get('/admin/former/delete/{id}', 'FormerController@destroy')->name('formerDelete');
  Route::post('/admin/former/store', 'FormerController@store')->name('formerStore');
  Route::post('/admin/former/update/{id}', 'FormerController@update')->name('formerUpdate');
// Formation
  Route::get('/admin/formation/list', 'FormationController@list')->name('formationList');
  Route::get('/admin/formation/create', 'FormationController@formerCreate')->name('formationCreate');
  Route::post('/admin/formation/add', 'FormationController@add')->name('formationAdd');
  Route::get('/admin/formation/show/{id}', 'FormationController@show')->name('formationShow');
  Route::get('/admin/formation/edit/{id}', 'FormationController@edit')->name('formationEdit');
  Route::get('/admin/formation/delete/{id}', 'FormationController@destroy')->name('formationDelete');
  Route::post('/admin/formation/store', 'FormationController@store')->name('formationStore');
  Route::post('/admin/formation/update/{id}', 'FormationController@update')->name('formationUpdate');
}
);
