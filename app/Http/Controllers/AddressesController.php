<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressesController extends Controller
{
    public function index()
    {
        $addresses = \App\Address::all();

        return view('home',compact('addresses'));
    }


    public function create(){
        return view('create');
    }


    public function update($id){

        $address = \App\Address::findorFail($id);

        $address->name = request('name');

        $address->title = request('title');

        $address->phone_number = request('phone_number');

        $address->picture = request('picture');

        $address->save();
        return redirect('/home');
    }
    

    public function store(){

        $address = new \App\Address();

        $address->id = request('id');

        $address->name = request('name');

        $address->title = request('title');

        $address->phone_number = request('phone_number');
        
        $address->picture = request('picture');

        $address->save();
        return redirect('/home');
    }


    public function show(){
    
    }


    public function edit($id){
        $address = \App\Address::find($id);
        return view('edit',compact('address'));
    }


    public function destroy($id){
    
        \App\Address::find($id)->delete();
        return redirect('/home');
    }
} 
