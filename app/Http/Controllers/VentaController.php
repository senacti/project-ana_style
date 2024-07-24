<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Venta::with('cliente')->get();
        return view('ventas.index', compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = User::all();
        return view('ventas.create', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required',
            'metodo_de_pago' => 'required',
            'producto' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
            'subtotal' => 'required',
            'iva' => 'required',
            'total' => 'required',
        ]);

        Venta::create([
            'cliente_id' => $request->cliente_id,
            'metodo_de_pago' => $request->metodo_de_pago,
            'fecha' => now(),
            'producto' => $request->producto,
            'cantidad' => $request->cantidad,
            'precio' => $request->precio,
            'subtotal' => $request->subtotal,
            'iva' => $request->iva,
            'total' => $request->total,
        ]);

        return redirect()->route('ventas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $venta = Venta::findOrFail($id);
    return view('ventas.show', compact('venta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $venta = Venta::findOrFail($id);
    $clientes = User::all(); // Asegúrate de tener todos los clientes disponibles para el formulario
    return view('ventas.edit', compact('venta', 'clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'cliente_id' => 'required',
            'metodo_de_pago' => 'required',
            'producto' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
            'subtotal' => 'required',
            'iva' => 'required',
            'total' => 'required',
        ]);
    
        $venta = Venta::findOrFail($id);
        $venta->update([
            'cliente_id' => $request->cliente_id,
            'metodo_de_pago' => $request->metodo_de_pago,
            'producto' => $request->producto,
            'cantidad' => $request->cantidad,
            'precio' => $request->precio,
            'subtotal' => $request->subtotal,
            'iva' => $request->iva,
            'total' => $request->total,
        ]);
    
        return redirect()->route('ventas.index')->with('success', 'Venta actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $venta = Venta::findOrFail($id);
        $venta->delete();

        return redirect()->route('ventas.index')->with('success', 'Venta eliminada con éxito.');
    }
}
