<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;
use App\Models\Vendedor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class VendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vendedor = Vendedor::paginate();

        return view('vendedores.index', compact('vendedor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('vendedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        //
        $vendedor = new Vendedor();
        $vendedor->nombre = $request->input('nombre');
        $vendedor->whatsapp = $request->input('whatsapp');
        $vendedor->messanger = $request->input('messanger');
        $vendedor->correo = $request->input('correo');
        $vendedor->facebook = $request->input('facebook');
        $vendedor->descripcion = $request->input('descripcion');
        $vendedor->foto = $request->file('imagen')->getClientOriginalName();

        $extension = $request->file('imagen')->getClientOriginalExtension();
        $vendedor->save();

        $request->file('imagen')->storeAs('/public/perfil/'.$vendedor->id, $vendedor->foto);


        return redirect()->route('vendedores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $vendedor = Vendedor::findOrFail($id);
        // return $vendedor;
        return view('vendedores.edit', compact('vendedor'));
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
        //
        return "GGG";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $vendedor = Vendedor::findOrFail($id);
        $vendedor->delete();
        $productos = producto::where('idVendedor', $id)->delete();
        //Eleminar foto del usuario
        File::deleteDirectory(storage_path('app/public/perfil/'.$vendedor->nombre));
        //Elemina las imagenesde sus productos
        File::deleteDirectory(storage_path('app/public/productos/'.$vendedor->nombre));
        return redirect()->route('vendedores.index');
    }

    public function buscar(Request $request){
        $busqueda = trim($request->get('busqueda'));
        $vendedor = DB::table('vendedores')->select('id','nombre')->where('nombre','LIKE','%'.$busqueda.'%')->orderBy('nombre')->paginate(10);
        
        return view('vendedores.index', compact('vendedor'));
    }

    public function actualizar(Request $request, $id){
        $vendedor = Vendedor::findOrFail($id);
        $vendedor->nombre = $request->input('nombre');
        $vendedor->whatsapp = $request->input('whatsapp');
        $vendedor->messanger = $request->input('messanger');
        $vendedor->correo = $request->input('correo');
        $vendedor->facebook = $request->input('facebook');
        $vendedor->descripcion = $request->input('descripcion');
        $vendedor->save();
        return redirect()->route('vendedores.index');

    }
    public function details($id){
        $vendedor = Vendedor::findOrFail($id);
        return view('vendedores.viewDetails', compact('vendedor'));
    }
}
