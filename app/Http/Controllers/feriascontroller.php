<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feriasmodel;

class feriascontroller extends Controller
{
    public function index()
    {
        try {
            $ferias = feriasmodel::orderBy('nombre')->paginate(6);
            $count = $ferias->total();
            return view('ferias.index', compact('ferias', 'count'));
        } catch (\Exception $e) {
        return view('ferias.index', [
            'ferias' => collect(),
            'count' => 0,
            'error' => 'Error fetching ferias: ' . $e->getMessage()
        ]);
        }
    }

    
    public function create()
    {
        try{
            return view('ferias.create');
        }catch(\Exception $e){
            return redirect()->route('derias.index')->with('error', 'error al cargar la pagina ferias :' . $e->getMessage());
        }
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
   try{
    $validated = $request->validate([
        'nombre' => 'required|string|max:255',
        'fecha' => 'required|date',
        'lugar' => 'required|string|max:255',
        'descripcion' => 'required|string|max:1000',
    ]);
    feriasmodel::create($validated);
    return redirect()->route('ferias.index')->with('success', 'Ferias created successfully');
    }catch(\Exception $e){
        return redirect()->route('ferias.index')->with('error', 'Error al crear la feria: ' . $e->getMessage());
    }


    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
        $feria = feriasmodel::findOrFail($id);
        return view('ferias.show', compact('feria'));
    } catch (\Exception $e) {
        return redirect()->route('ferias.index')->with('error', 'Error fetching feria: ' . $e->getMessage());
    }
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        
    }
}



