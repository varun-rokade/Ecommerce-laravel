<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VistorController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SiteInfoController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductListController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get("/getvisitor",[VistorController::class,"getVisitorDetails"]);

Route::post("/postcontact",[ContactController::class,"contactDetails"]);


//Site Info Route
Route::get("/allsiteinfo",[SiteInfoController::class,"allSiteInfo"]);

//Category Route
Route::get("/allcategory",[CategoryController::class,"productCategory"]);

//Product List Route
Route::get("/productlistbyremark/{remark}",[ProductListController::class,"productListByRemark"]);

Route::get("/productlistbycategory/{category}",[ProductListController::class,"productListByCategory"]);

Route::get("/productlistbysubcategory/{category}/{subcategory}",[ProductListController::class,"productListBySubCategory"]);