<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function accueil (){
        $images = Image::all();
        return view('accueil',compact('images'));
    }
    public function create (){
        return view('pages.create');
    }
    public function show ($id){
        $show = Image::find($id);
        return view('pages.show',compact('show'));
    }
    public function administration (){
        $images = Image::all();
        return view('pages.administration',compact('images'));
    }
    public function store (Request $request){
        $store = new Image();
        $store->name = $request->name;
        $store->description = $request->description;
        $store->src = $request->file('src')->hashName();
        Storage::put('public',$request->file('src'));
        $store->save();
        return redirect()->route('administration');
        
    }

  
}
