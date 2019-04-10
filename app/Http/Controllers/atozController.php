<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\topup;
use App\Models\product;
use DB;

class atozController extends Controller
{
    public function tambah()
    {
        
        // memanggil view tambah
        return view('topups.create');
        
    }
    public function store(Request $request)
    {
    // insert data ke table topup
    DB::table('topup_balance')->insert([
        'phone_number' => $request->phone_number,
        'value' => $request->value,
        
        ]);
        // alihkan halaman ke halaman product
        return redirect('products/create');
        
    }
        
    public function tambah1()
    {
        
        // memanggil view tambah
        return view('products/create');
        
    }
    public function store1(Request $request)
    {
        // insert data ke table product
        DB::table('product')->insert([
            'product' => $request->product,
            'shipping_address' => $request->shipping_address,
            'price' => $request->price,
            
            ]);
            // alihkan halaman ke halaman topup
            return redirect('products/transaction');
            
    }

    public function view(request $request)
    {
        $products = \App\Models\product::all();
        
        // DB::table('product')->insert([
        //     $id = $request->id,
        //     $product = $request->product,
        //     $shipping_address = $request->shipping_address,
        //     $price = $request->price,
        //     ]);

        
        //         // alihkan halaman ke halaman topup
                return view('products/transaction', compact('products'));
        // return view('products/transaction');
        
    }

    public function order(){
        $orders = \App\Models\product::all();

        return view('products/order');
    }

    public function histori(){
        $products = \App\Models\product::all();
        
        // DB::table('product')->insert([
        //     $id = $request->id,
        //     $product = $request->product,
        //     $shipping_address = $request->shipping_address,
        //     $price = $request->price,
        //     ]);
        // return view('products/transaction');
        
        return view('products/history',  compact('products'));
    }
}
        