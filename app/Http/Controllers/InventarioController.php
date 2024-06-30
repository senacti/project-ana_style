<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InventarioController extends Controller
{
    /*
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['inventarios']=Inventario::paginate(10);
        return view('inventario.index',$datos);
    }

    /*
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventario.create');
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventario = new Inventario();

        $inventario->foto = $request->foto;
        $inventario->Nombre = $request->Nombre;
        $inventario->descripcion = $request->descripcion;
        $inventario->talla = $request->talla;
        $inventario->cantidades = $request->cantidades;
        $inventario->precio = $request->precio;

        if($request->hasFile('foto')) {
            $inventario['foto']=$request->file('foto')->store('uploads','public');
        }

        $inventario->save();
        return redirect('/inventario');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function show(Inventario $inventario)
    {
        //
    }

    /**
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventario=Inventario::findOrFail($id);
        return view('inventario.edit', compact('inventario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inventarioss = request()->except(['_token','_method']);

        if($request->hasFile('foto')) {
            $inventario=Inventario::findOrFail($id);
            Storage::delete('public/'.$inventario->foto);
            $inventarioss['foto'] = $request->file('foto')->store('uploads','public');
        }

        
        Inventario::where('id','=',$id)->update($inventarioss);
        $inventario=Inventario::findOrFail($id);
        return view('inventario.edit', compact('inventario'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventario=Inventario::findOrFail($id);
        if(Storage::delete('public'.$inventario->foto)){
            Inventario::destroy($id);
        }
        return redirect('/inventario/');
    }
}
 