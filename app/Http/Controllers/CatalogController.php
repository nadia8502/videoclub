<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class CatalogController extends Controller
{
	public $id;
	

    public function getIndex()
    {
    	
    
    	return view('catalog.index')->with('arrayPeliculas', Movie::all());
    }
    public function getedit($id)
    {
    	return view('catalog.edit')->with('pelicula', Movie::findOrFail($id));
    }
    public function getCreate()
    {
    	return view('catalog.create');
    }
    public function getShow($id)
    {
    		
    return view('catalog.show')->with('pelicula', Movie::findOrFail($id));
    }
    public function postCreate(Request $request, $id)
    {
        $crear = Movie::findOrFail($id);
        $crear = $request->input('title');
        $crear = $request->input('year');
        $crear = $request->input('director');
        $crear = $request->input('poster');
        $crear = $request->input('synopsis');
        $crear->save();
        return redirect('/catalog');
    }
    public function putEdit($id)
    {
        $creado = Movie::all();
        $crear = Movie::findOrFail($id);
        return view('catalog.show', ['pelicula' => $creado, 'pelicula' => $crear,]);
    }
   

}
