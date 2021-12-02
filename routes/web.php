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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('home/addMembers', 'MembersController@membersForm');
Route::resource('registerMembers', 'MembersController');

Route::resource('home/viewMembers', 'ViewMembersController');

Route::get('home/viewList','MembersListController@index');
Route::get('home/viewList/getPDF','PrintMembersController@getPDF');

Route::get('home/viewCounties', 'CountiesController@display');

Route::get('home/updateList', 'UpdateMembersController@index');
Route::get('home/members-list', 'UpdateMembersController@membersList');


Route::get('home/ajaxdata', 'EditMembersController@index');
Route::get('home/ajaxdata/getdata', 'EditMembersController@getdata');

Route::post('home/ajaxdata/postdata', 'EditMembersController@postdata');

Route::get('home/ajaxdata/fetchdata', 'EditMembersController@fetchdata');

Route::get('home/lofaRooster','LofaListController@index');
Route::get('home/lofaRooster/getPDF','PrintLofaController@getPDF');

Route::get('home/bongRooster','BongListController@index');
Route::get('home/bongRooster/getPDF','PrintBongController@getPDF');

Route::get('home/bomiRooster','BomiListController@index');
Route::get('home/bomiRooster/getPDF','PrintBomiController@getPDF');

Route::get('home/gbarpoluRooster','GbarpoluListController@index');
Route::get('home/gbarpoluRooster/getPDF','PrintGbarpoluController@getPDF');

Route::get('home/bassaRooster','GrandBassaListController@index');
Route::get('home/bassaRooster/getPDF','PrintGrandBassaController@getPDF');

Route::get('home/capeRooster','GrandCapeMountListController@index');
Route::get('home/capeRooster/getPDF','PrintGrandCapeMountController@getPDF');

Route::get('home/gedehRooster','GrandGedehListController@index');
Route::get('home/gedehRooster/getPDF','PrintGrandGedehController@getPDF');

Route::get('home/kruRooster','GrandKruListController@index');
Route::get('home/kruRooster/getPDF','PrintGrandKruController@getPDF');

Route::get('home/margibiRooster','MargibiListController@index');
Route::get('home/margibiRooster/getPDF','PrintMargibiController@getPDF');

Route::get('home/marylandRooster','MarylandListController@index');
Route::get('home/marylandRooster/getPDF','PrintMarylandController@getPDF');

Route::get('home/montRooster','MontserradoListController@index');
Route::get('home/montRooster/getPDF','PrintMontserradoController@getPDF');

Route::get('home/nimbaRooster','NimbaListController@index');
Route::get('home/nimbaRooster/getPDF','PrintNimbaController@getPDF');

Route::get('home/cessRooster','RiverCessListController@index');
Route::get('home/cessRooster/getPDF','PrintRiverCessController@getPDF');

Route::get('home/geeRooster','RiverGeeListController@index');
Route::get('home/geeRooster/getPDF','PrintRiverGeeController@getPDF');

Route::get('home/sinoeRooster','SinoeListController@index');
Route::get('home/sinoeRooster/getPDF','PrintSinoeController@getPDF');

Route::get('home/adminList','CountyAdminController@index');
Route::get('home/adminList/getPDF','CountyAdminController@getPDF');

Route::get('home/districts','DistrictsController@index');

Route::get('home/bomiDist1','BomiDistController@dist1');
Route::get('home/bomiDist2','BomiDistController@dist2');
Route::get('home/bomiDist3','BomiDistController@dist3');

Route::get('home/bongDist1','BongDistController@dist1');
Route::get('home/bongDist2','BongDistController@dist2');
Route::get('home/bongDist3','BongDistController@dist3');
Route::get('home/bongDist4','BongDistController@dist4');
Route::get('home/bongDist5','BongDistController@dist5');
Route::get('home/bongDist6','BongDistController@dist6');
Route::get('home/bongDist7','BongDistController@dist7');

Route::get('home/gbarpoluDist1','GbarpoluDistController@dist1');
Route::get('home/gbarpoluDist2','GbarpoluDistController@dist2');
Route::get('home/gbarpoluDist3','GbarpoluDistController@dist3');

Route::get('home/bassaDist1','GrandBassaDistController@dist1');
Route::get('home/bassaDist2','GrandBassaDistController@dist2');
Route::get('home/bassaDist3','GrandBassaDistController@dist3');
Route::get('home/bassaDist4','GrandBassaDistController@dist4');
Route::get('home/bassaDist5','GrandBassaDistController@dist5');

Route::get('home/gedehDist1','GrandGedehDistController@dist1');
Route::get('home/gedehDist2','GrandGedehDistController@dist2');
Route::get('home/gedehDist3','GrandGedehDistController@dist3');

Route::get('home/kruDist1','GrandKruDistController@dist1');
Route::get('home/kruDist2','GrandKruDistController@dist2');

Route::get('home/lofaDist1','LofaDistController@dist1');
Route::get('home/lofaDist2','LofaDistController@dist2');
Route::get('home/lofaDist3','LofaDistController@dist3');
Route::get('home/lofaDist4','LofaDistController@dist4');
Route::get('home/lofaDist5','LofaDistController@dist5');

Route::get('home/margibiDist1','MargibiDistController@dist1');
Route::get('home/margibiDist2','MargibiDistController@dist2');
Route::get('home/margibiDist3','MargibiDistController@dist3');
Route::get('home/margibiDist4','MargibiDistController@dist4');
Route::get('home/margibiDist5','MargibiDistController@dist5');

Route::get('home/maryDist1','MarylandDistController@dist1');
Route::get('home/maryDist2','MarylandDistController@dist2');
Route::get('home/maryDist3','MarylandDistController@dist3');

Route::get('home/montDist1','MontDistController@dist1');
Route::get('home/montDist2','MontDistController@dist2');
Route::get('home/montDist3','MontDistController@dist3');
Route::get('home/montDist4','MontDistController@dist4');
Route::get('home/montDist5','MontDistController@dist5');
Route::get('home/montDist6','MontDistController@dist6');
Route::get('home/montDist7','MontDistController@dist7');
Route::get('home/montDist8','MontDistController@dist8');
Route::get('home/montDist9','MontDistController@dist9');
Route::get('home/montDist10','MontDistController@dist10');
Route::get('home/montDist11','MontDistController@dist11');
Route::get('home/montDist12','MontDistController@dist12');
Route::get('home/montDist13','MontDistController@dist13');
Route::get('home/montDist14','MontDistController@dist14');
Route::get('home/montDist15','MontDistController@dist15');
Route::get('home/montDist16','MontDistController@dist16');
Route::get('home/montDist17','MontDistController@dist17');

Route::get('home/nimbaDist1','NimbaDistController@dist1');
Route::get('home/nimbaDist2','NimbaDistController@dist2');
Route::get('home/nimbaDist3','NimbaDistController@dist3');
Route::get('home/nimbaDist4','NimbaDistController@dist4');
Route::get('home/nimbaDist5','NimbaDistController@dist5');
Route::get('home/nimbaDist6','NimbaDistController@dist6');
Route::get('home/nimbaDist7','NimbaDistController@dist7');
Route::get('home/nimbaDist8','NimbaDistController@dist8');
Route::get('home/nimbaDist9','NimbaDistController@dist9');

Route::get('home/cessDist1','CessDistController@dist1');
Route::get('home/cessDist2','CessDistController@dist2');

Route::get('home/geeDist1','GeeDistController@dist1');
Route::get('home/geeDist2','GeeDistController@dist2');
Route::get('home/geeDist1','GeeDistController@dist1');

Route::get('home/sinoeDist1','SinoeDistController@dist1');
Route::get('home/sinoeDist2','SinoeDistController@dist2');
Route::get('home/sinoeDist1','SinoeDistController@dist1');

Route::get('home/ageGroup','AgeGroupController@index');

Route::get('home/BomiAge1','BomiAgeController@age1');
Route::get('home/BomiAge2','BomiAgeController@age2');
Route::get('home/BomiAge3','BomiAgeController@age3');
Route::get('home/BomiAge4','BomiAgeController@age4');

Route::get('home/BongAge1','BongAgeController@age1');
Route::get('home/BongAge2','BongAgeController@age2');
Route::get('home/BongAge3','BongAgeController@age3');
Route::get('home/BongAge4','BongAgeController@age4');

Route::get('home/GbarpoluAge1','GbarpoluAgeController@age1');
Route::get('home/GbarpoluAge2','GbarpoluAgeController@age2');
Route::get('home/GbarpoluAge3','GbarpoluAgeController@age3');
Route::get('home/GbarpoluAge4','GbarpoluAgeController@age4');

Route::get('home/bassaAge1','bassaAgeController@age1');
Route::get('home/bassaAge2','bassaAgeController@age2');
Route::get('home/bassaAge3','bassaAgeController@age3');
Route::get('home/bassaAge4','bassaAgeController@age4');

Route::get('home/CapeAge1','CapeAgeController@age1');
Route::get('home/CapeAge2','CapeAgeController@age2');
Route::get('home/CapeAge3','CapeAgeController@age3');
Route::get('home/CapeAge4','CapeAgeController@age4');

Route::get('home/GedehAge1','GedehAgeController@age1');
Route::get('home/GedehAge2','GedehAgeController@age2');
Route::get('home/GedehAge3','GedehAgeController@age3');
Route::get('home/GedehAge4','GedehAgeController@age4');

Route::get('home/KruAge1','KruAgeController@age1');
Route::get('home/KruAge2','KruAgeController@age2');
Route::get('home/KruAge3','KruAgeController@age3');
Route::get('home/KruAge4','KruAgeController@age4');

Route::get('home/LofaAge1','LofaAgeController@age1');
Route::get('home/LofaAge2','LofaAgeController@age2');
Route::get('home/LofaAge3','LofaAgeController@age3');
Route::get('home/LofaAge4','LofaAgeController@age4');

Route::get('home/MargibiAge1','MargibiAgeController@age1');
Route::get('home/MargibiAge2','MargibiAgeController@age2');
Route::get('home/MargibiAge3','MargibiAgeController@age3');
Route::get('home/MargibiAge4','MargibiAgeController@age4');

Route::get('home/MaryAge1','MaryAgeController@age1');
Route::get('home/MaryAge2','MaryAgeController@age2');
Route::get('home/MaryAge3','MaryAgeController@age3');
Route::get('home/MaryAge4','MaryAgeController@age4');

Route::get('home/MontAge1','MontAgeController@age1');
Route::get('home/MontAge2','MontAgeController@age2');
Route::get('home/MontAge3','MontAgeController@age3');
Route::get('home/MontAge4','MontAgeController@age4');

Route::get('home/NimbaAge1','NimbaAgeController@age1');
Route::get('home/NimbaAge2','NimbaAgeController@age2');
Route::get('home/NimbaAge3','NimbaAgeController@age3');
Route::get('home/NimbaAge4','NimbaAgeController@age4');

Route::get('home/CessAge1','CessAgeController@age1');
Route::get('home/CessAge2','CessAgeController@age2');
Route::get('home/CessAge3','CessAgeController@age3');
Route::get('home/CessAge4','CessAgeController@age4');

Route::get('home/GeeAge1','GeeAgeController@age1');
Route::get('home/GeeAge2','GeeAgeController@age2');
Route::get('home/GeeAge3','GeeAgeController@age3');
Route::get('home/GeeAge4','GeeAgeController@age4');

Route::get('home/SinoeAge1','SinoeAgeController@age1');
Route::get('home/SinoeAge2','SinoeAgeController@age2');
Route::get('home/SinoeAge3','SinoeAgeController@age3');
Route::get('home/SinoeAge4','SinoeAgeController@age4');