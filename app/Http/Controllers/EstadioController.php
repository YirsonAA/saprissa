<?php

namespace App\Http\Controllers;

use App\Models\Estadio;
use Illuminate\Http\Request;
//Here the model data from the categories table is taken and injected into the views
class EstadioController extends Controller
{
    //Get the estadios and send to estadios.index view
    public function index()
    {
        $estadios = Estadio::all();
        return view('estadios.index', compact('estadios'));
    }
    //Show the create view
    public function create()
    {
        return view('estadios.create');
    }
    //save the estadio
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
        ]);

        Estadio::create($request->all());
        return redirect()->route('estadios.index')->with('success', 'Category create successfully.');
    }
    //Show the estadio data
    public function show(Estadio $estadio)
    {
        return view('estadios.show', compact('estadio'));
    }
    //Show the estadio edit view whit estadio data
    public function edit(Estadio $estadio)
    {
        return view('estadios.edit', compact('estadio'));
    }
    //Update estadio data
    public function update(Request $request, Estadio $estadio)
    {
        $request->validate([
            'description' => 'required',
        ]);

        $estadio->update($request->all());
        return redirect()->route('estadios.index')->with('success', 'Category successfully updated.');
    }
    //Delete estadio
    public function destroy(Estadio $estadio)
    {
        $estadio->delete();
        return redirect()->route('estadios.index')->with('success', 'Estadio successfully deleted.');
    }
    public function lista()
    {
        $estadios = Estadio::all();
        return view('estadios.lista', compact('estadios'));
    }
    // app/Http/Controllers/EstadioController.php

    public function partidos(Estadio $estadio)
    {
        $partidos = $estadio->partidos;
        return view('estadios.show', compact('estadio', 'partidos'));
    }
}
