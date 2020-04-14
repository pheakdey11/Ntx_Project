<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Membermodel;

class ntxmember extends Controller
{
    public function showdata(){
        $mem = Membermodel::all();
        return view('show',['member' => $mem]);
    }
    public function create(){
        return view('create');
    }
    public function addmember(Request $req){
        $mem = new Membermodel();

        $mem->name = $req->input('name');
        $mem->card = $req->input('card');
        $mem->level = $req->input('level');
        $mem->position = $req->input('position');

        if($req->hasfile('image')){
            $file = $req->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time() . '.' . $extension;
            $file->move('img/', $filename);
            $mem->image = $filename;
        }else{
            return $req;
            $mem->image = '';
        }
        $mem->save();
        // $mem->create($req->all);
        return redirect()->route('showdata')
        ->with('success','Book added successfully...');
            
    }
    public function edit($id){
        $mems = Membermodel::find($id);
        return view('edit',['members' => $mems]);
    } 
    public function update(Request $req, $id){

        $mems = Membermodel::find($id);

        $mems->name = $req->input('name');
        $mems->card = $req->input('card');
        $mems->level = $req->input('level');
        $mems->position = $req->input('position');

        if($req->hasfile('image')){
            $file = $req->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time() . '.' . $extension;
            $file->move('img/', $filename);
            $mems->image = $filename;
        }
        $mems->save();
        
        return redirect()->route('showdata')
        ->with('success','Book added successfully...');
    }
}
