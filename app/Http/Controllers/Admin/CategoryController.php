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
        $categoryDetails = [];

        // echo($categories);
        // die();

        foreach($categories as $value){
            $subcategory = SubCateogry::where("category_name",$value["category_name"])->get();

            $item=[
                "category_name" => $value['category_name'],
                "category_image" => $value["category_image"],
                "subcategory_name" => $subcategory
            ];

            array_push($categoryDetails,$item);

        }


        return $categoryDetails;

    }
}
