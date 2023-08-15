<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductDetails;
use App\Models\ProductList;

class ProductDetailsController extends Controller
{
    public function ProductDetails(Request $request) {
        $id = $request -> id;
        $prodDetails = ProductDetails::where('product_id',$id)->get();
        $prodList = ProductList::where('id',$id)->get();
        // return $prodList;

        $array = [
            'prodDetails' => $prodDetails,
            'prodList' => $prodList
        ];
        // echo $array;
        // return 'varun';
        return $array;
    }   
}
