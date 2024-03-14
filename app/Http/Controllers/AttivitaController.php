<?php

namespace App\Http\Controllers;

use App\Models\Attivita;
use App\Models\Progetti;
use Illuminate\Http\Request;

class AttivitaController extends Controller
{
    public function index()
    {
        $attivitas = Attivita::all();
        return view('attivitas.index', compact('attivitas'));
    }

    public function create()
    {
        $progetti = Progetti::all();
        return view('attivitas.create', compact('progetti'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|max:255',
            'descrizione' => 'required',
            'progetto_id' => 'required|exists:progettis,id',
        ]);
        
        Attivita::create($validatedData);
        return redirect()->route('attivitas.index');
    }

    public function show($id)
    {
        $attivita = Attivita::findOrFail($id);
        return view('attivitas.show', compact('attivita'));
    }

    public function edit($id)
    {
        $attivita = Attivita::findOrFail($id);
        $progetti = Progetti::all();
        return view('attivitas.edit', compact('attivita', 'progetti'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'required|max:255',
            'descrizione' => 'required',
            'progetto_id' => 'required|exists:progettis,id',
        ]);
        
        Attivita::whereId($id)->update($validatedData);
        return redirect()->route('attivitas.index');
    }

    public function destroy($id)
    {
        $attivita = Attivita::findOrFail($id);
        $attivita->delete();
        return redirect()->route('attivitas.index');
    }
}
