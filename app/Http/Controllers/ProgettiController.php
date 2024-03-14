<?php

namespace App\Http\Controllers;

use App\Models\Progetti;
use Illuminate\Http\Request;

class ProgettiController extends Controller
{
    public function index()
{
    $progetti = Progetti::all();
    return view('progetti.index', compact('progetti'));
}

public function create()
{
    return view('progetti.create');
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'nome' => 'required|max:255',
        'descrizione' => 'required',
        // Aggiungi altre validazioni necessarie
    ]);
    
    Progetti::create($validatedData);
    return redirect()->route('progetti.index');
}

public function show($id)
{
    $progetto = Progetti::findOrFail($id);
    return view('progetti.show', compact('progetto'));
}

public function edit($id)
{
    $progetto = Progetti::findOrFail($id);
    return view('progetti.edit', compact('progetto'));
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'nome' => 'required|max:255',
        'descrizione' => 'required',
        // Aggiungi altre validazioni necessarie
    ]);

    Progetti::whereId($id)->update($validatedData);
    return redirect()->route('progetti.index');
}

public function destroy($id)
{
    $progetto = Progetti::findOrFail($id);
    $progetto->delete();
    return redirect()->route('progetti.index');
}

}
