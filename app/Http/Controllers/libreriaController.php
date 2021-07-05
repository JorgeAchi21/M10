<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class libreriaController extends Controller
{
    public function home(){
        return view('home');
    }
    
    public function catalog(){
        return view('catalog.index');
    }
    
    public function show($id) {
        return view('catalog.show', compact('id'));
    }

    public function create() {
        return view('catalog.create');
    }
    public function createStore(Request $request) {
        /*return ('Hola mundo');*/
        /*return $request->all();*/
        /*return $request->input('titulo');*/
        
        
        $request->validate([
            'titulo' => 'required | min:5 | max:50',
            'autor' => 'required | min:5 | max:50',
            'fecha' => 'required |date',
            'opinion' => 'required | numeric | min:1 | max:10',
            'precio' => 'required | numeric | min:1 | max:200'
        ]);

        /*return ('Validacion ok');*/

        /*return view('catalog.edit', compact('id'));*/
        return redirect('catalog'); 
    }

    public function edit($id) {
        return view('catalog.edit', compact('id'));

    }
    
    public function editStore(Request $request) {
        
        $request->validate([
            'titulo' => 'required | min:5 | max:50',
            'autor' => 'required | min:5 | max:50',
            'fecha' => 'required | date',
            'opinion' => 'required | numeric | min:1 | max:10',
            'precio' => 'required | numeric | min:1 | max:200'
        ]);

        return redirect('catalog'); 
    }

    public function destroy($id) {
        //return "hola mundo";
        return view('catalog.destroy', compact('id'));
    }
    
}
