<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VistorController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SiteInfoController;
use App\Http\Controllers\Admin\CategoryController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get("/getvisitor",[VistorController::class,"getVisitorDetails"]);

Route::post("/postcontact",[ContactController::class,"contactDetails"]);


//Site Info Route
Route::get("/allsiteinfo",[SiteInfoController::class,"allSiteInfo"]);

//Category Route
Route::get("/allcategory",[CategoryController::class,"productCategory"]);