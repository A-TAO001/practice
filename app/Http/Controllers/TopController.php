<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Company;

class TopController extends Controller
{
    // topページへ飛ぶ
    public function index(){

        $companies = Company::all();

        $products = Product::orderBy('id','asc')->paginate(3);

        return view('top',[
            'products' => $products,
            'companies' => $companies
        ]);
    }
}
