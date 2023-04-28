<?php

namespace App\Http\Controllers;

use App\Models\Partido;
use App\Models\Estadio;
use Illuminate\Http\Request;
//Here the model data from the categories table is taken and injected into the views
class PartidoController extends Controller
{
    //Get the partidos and categories and send to partidos.index view
    public function index()
    {
        $partidos = Partido::with('estadio')->get();
        return view('partidos.index', compact('partidos'));
    }
    //Show the create view and send the estadio data
    public function create()
    {
        $estadios = Estadio::all();
        return view('partidos.create', compact('estadios'));
    }
    //save the partido with the estadio relation data
    public function store(Request $request)
    {
        $request->validate([
            'partido' => 'required',
            'estadio_id' => 'required|exists:estadios,id',
        ]);

        Partido::create($request->all());
        return redirect()->route('partidos.index')->with('success', 'Partido create successfully.');
    }
    //Show the partidos data
    public function show(Partido $partido)
    {
        return view('partidos.show', compact('partido'));
    }
    //Show the partidos edit view whit estadio and partidos data
    public function edit(Partido $partido)
    {
        $estadios = Estadio::all();
        return view('partidos.edit', compact('partido', 'estadios'));
    }
    //Update partidos data
    public function update(Request $request, Partido $partido)
    {
        $request->validate([
            'partido' => 'required',
            'estadio_id' => 'required|exists:estadios,id',
        ]);

        $partido->update($request->all());
        return redirect()->route('partidos.index')->with('success', 'Partido successfully updated.');
    }
    //Delete partidos
    public function destroy(Partido $partido)
    {
        $partido->delete();
        return redirect()->route('partidos.index')->with('success', 'Partido successfully deleted.');
    }
    public function partidosPorEstadio(Estadio $estadio)
    {
        $partidos = $estadio->partidos;
        return view('partidos.estadio', compact('estadio', 'partidos'));
    }
}
