<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\topup;
use DB;

class TopUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topups = topup::all();
        return view('topups.index')->compact('topups');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        // $request = topup::all();
        // return view('topups.create');
        // $topups = new topup([
        //     'phone_number' => $topups['phone_number'],
        //     'value' => $topups['value']
        // ]);
        
        // DB::insert('insert into topup_balance (phone_number, value) values(?)',[$phone_number, $values]);
        // echo "Record inserted successfully.<br/>";
        return view('topups.create');
    }
        
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'phone_number'=>'required|integer',
        //     'value'=> 'string',
        //   ]);
        //   $topups = new topup([
        //     'phone_number' => $topups->get('phone_number'),
        //     'value'=> $topups->get('value'),
        //   ]);
        //   $topups->save();
        //   return redirect('topup.index')->with('success');
        $topups = new topup();
 
        $topups->phone_number = input('phone_number');
        $topups->value = input('value');
 
        $topups->save();
 
        return redirect('/topup');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topups = topup::all();
        return view('topups.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
}
