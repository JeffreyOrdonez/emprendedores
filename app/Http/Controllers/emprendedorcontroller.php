<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\emprendedoresmodel;

class emprendedorcontroller extends Controller
{
    public function index(){

        try{
             $ferias = \App\Models\feriasmodel::all();
        $emprendedores = emprendedoresmodel::orderBy('nombre')->paginate(6);
        $count = $emprendedores->total();
        return view('emprendedores.index', compact('emprendedores', 'count'));

    } catch(\Exception $e){
            return view('emprendedores.index', [
                'emprendedores' => collect(),
                'count' => 0,
                'error' => 'Error fetching emprendedores: ' . $e->getMessage()     
            ]);
    }
}
    public function create(){
        try{
             $ferias = \App\Models\feriasmodel::all();
        return view('emprendedores.create', compact('ferias'));
        }catch(\Exception $e){
           return redirect()->route('emprendedores.create')->with('error', 'error no es posible cargar la pagina' .$e->getMessage());
        }
    }

    public function store(Request $request){

        try{
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'telefono' => 'required|digits:8' ,
           'servicio' => 'required|string|max:200',
             'ferias' => 'array|exists:ferias,id'
        ]);
        $emprendedores = emprendedoresmodel::create($validated);
        if ($request->has('ferias')){
            $emprendedores->ferias()->attach($request->input('ferias'));
        }
        return redirect()->route('emprendedores.index')->with('success', 'Emprendedor creado con exito');
        }catch(\Exception $e){
            return redirect()->route('emprendedores.index')->with('error', 'Error al crear el emprendedor: ' . $e->getMessage());
        }
    }

    public function show(string $id){

        try{
        $emprendedores = emprendedoresmodel::findOrFail($id);
        return view('emprendedores.show', compact('emprendedores'));
    }catch(\Exception $e){
        return redirect()->route('emprendedores.index')->with('error', 'Error al mostrar el emprendedor: ' . $e->getMessage());
    }

    }
    public function edit(string $id){
        try{
        $emprendedores = emprendedoresmodel::findOrFail($id);
        return view('emprendedores.edit', compact('emprendedores'));
    }catch(\Exception $e){
            return redirect()->route('emprendedores.index')->with('error', 'Error al cargar la pagina de edicion: ' . $e->getMessage());
        }

    }

    public function update(Request $request, string $id){
        try{
            $validated = $request->validate([
                'nombre' => 'required|string|max:100',
                'telefono' => 'required|digits:8',
                'servicio' => 'required|string|max:200',
            ]);

            $emprendedores = emprendedoresmodel::findOrFail($id);
            $emprendedores->update($validated);
            return redirect()->route('emprendedores.index')->with('success', 'Emprendedor actualizado con exito');
        }catch(\Exception $e){
            return redirect()->route('emprendedores.index')->with('error', 'Error al actualizar el emprendedor: ' . $e->getMessage());
        }

    }

    public function destroy(string $id){

        try{
        $emprendedores = emprendedoresmodel::findOrFail($id);
        $emprendedores->delete();
        return redirect()->route('emprendedores.index')->with('success', 'Emprendedor eliminado con exito');
        }catch(\Exception $e){
            return redirect()->route('emprendedores.index')->with('error', 'Error al eliminar el emprendedor: ' . $e->getMessage());
        }

    }


}
