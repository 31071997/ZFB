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

Route::get('/', 'appController@getHomePage');
Route::get('/home', 'appController@home');
Route::get('/adminhome', 'AdminController@index');
Route::get('/circular', 'appController@circular');
Route::get('/circular/ViewCircular/Finance&Accounts', 'appController@financeAnDaccountes');
Route::get('/circular/ViewCircular/Programming&Testing','appController@ProgrammingAnDTesting');
Route::get('/circular/ViewCircular/Graphics&Design', 'appController@GraphicsAnDDesign');
Route::get('/circular/ViewCircular/Management&HR', 'appController@ManagementAnDHR');
Route::get('/circular/ViewCircular/Planning&analysis', 'appController@PlanningAnDanalysis');
Route::get('/circular/ViewCircular', 'appController@ViewCircular');
Route::get('/circular/ViewCircular/Apply', 'appController@apply');
Route::get('/welcome' , function()
           {
               return view('welcome');
           });
Route::get('/alert' , function()
           {
               return view('alert');
           });
Auth::routes();
Route::get('/circular/ViewCircular/Finamce&accpuntCV', 'appController@FinamceANDaccpuntCV');
Route::get('/circular/ViewCircular/Graphics&designingCV', 'appController@GraphicsANDdesigningCV');
Route::get('/circular/ViewCircular/Management&HRCV', 'appController@ManagementANDHRCV');
Route::get('/circular/ViewCircular/Planning&analysisCV', 'appController@PlanningANDanalysisCV');
Route::get('/circular/ViewCircular/Programming&testingCV', 'appController@ProgrammingANDtestingCV');
Route::post('/cv', ['uses'=>'cvController@postCv' , 'as'=>'cv']);
Route::post('/programmingcv', ['uses'=>'ProgrammingCvController@postProgrammingCv' , 'as'=>'programmingcv']);
Route::post('/planningcv', ['uses'=>'PlanningAndAnalysisCvController@postPlanningCv' , 'as'=>'planningcv']);

Route::get('/submit', ['uses'=>'CvController@getShow', 'as'=>'submit']);
Route::get('/submitprogrammingcv', ['uses'=>'ProgrammingCvController@getShowProgrammingCv', 'as'=>'submitprogrammingcv']);
Route::get('/submitfinancecv', ['uses'=>'financeCvController@getShowFinanceCv', 'as'=>'submitfinancecv']);
Route::post('/financecv', ['uses'=>'financeCvController@postFinanceCv' , 'as'=>'financecv']);


Auth::routes();
//Route::get('/admin', 'AdminController@index');
Route::get('/homepage', ['uses'=>'appController@getHomePage', 'as'=>'homepage']);


Route::get('/showprogrammingcv' , ['uses'=>'ProgrammingCvController@showProgrammingCv', 'as'=>'showprogrammingcv']);
Route::get('/showfinancecv' , ['uses'=>'FinanceCvController@showFinanceCv', 'as'=>'showfinancecv']);
Route::get('/admindashboard', ['uses'=>'appController@adminDashboard' , 'as'=>'admindashboard']);
Route::get('/showplanningcv' , ['uses'=>'planningAndAnalysisCvController@showplanningAndAnalysisCv', 'as'=>'showplanningcv']);
Route::get('/circular/ViewCircular/InterviewCard' , 'appController@GetCard');
Route::get('/contactUs' , 'appController@GetContact');


