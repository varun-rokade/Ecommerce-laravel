<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCateogry;

class CategoryController extends Controller
{
    public function productCategory(Request $request){
        
        $categories = Category::all();

        foreach($categories as $value){
            $subcategory = SubCateogry::where("category_name",$value["category_name"])->get();
        }


        return $categories;

    }
}
