<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Brand;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function index(Request $request){
        $cate_product =Category::where('category_status','0')->get(); 
        
        $brand_product = Brand::where('brand_status','0')->orderby('brand_id','desc')->get(); 


        $all_product =Product::where('product_status','0')->get();
        return view('welcome')->with('category',$cate_product)->with('brand',$brand_product)->with('all_product',$all_product)->get();

}}
