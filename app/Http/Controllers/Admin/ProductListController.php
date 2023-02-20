<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductList;

class ProductListController extends Controller
{
    public function productListByRemark(Request $request) {

        $remark = $request->remark;
        // print_r($remark);
        // die();
        $productList = ProductList::where('remark',$remark)->get();
        return $productList;
    }

    public function productListByCategory(Request $request) {
        $category = $request->category;
        $productCategory = ProductList::where('category',$category)->get();
        return $productCategory;
    }

    public function productListBySubCategory(Request $request) {
        $category = $request->category;
        // print_r($category);
        // die();
        $subcategory = $request->subcategoy;
        // print_r($subcategory);
        // die();
        $productSubCategory = ProductList::where('category',$category)->where('subcategoy',$subcategory)->get();
        // print_r($productSubCategory);
        // die();
        return $productSubCategory;
    }

}
