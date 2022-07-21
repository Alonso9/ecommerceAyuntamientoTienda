<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto,AppVendedor;
use App\Models\Vendedor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $vendedor = Vendedor::find($id);

        // $productos = producto::where('idProducto', $id);
        $productos = DB::table('productos')->select('*')->where('idVendedor','=',$id)->orderBy('nombre', 'asc')->paginate(50);
        return view('productos.index', compact('productos', 'vendedor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $vendedor = Vendedor::find($id);

        return view('productos.create', compact('vendedor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $vendedor = Vendedor::find($request->input('idvendedor'));

        $productos2 = new producto();
        $productos2->idVendedor = $request->input('idvendedor');
        $productos2->nombre = $request->input('nombre');
        $productos2->Precio = floatval($request->input('Precio'));
        $productos2->stock = $request->input('stock');
        $productos2->tag = $request->input('tag');
        $productos2->descripcion = $request->input('descripcion');
        $extension = $request->file('imagen')->getClientOriginalExtension();
        $nombre = $request->input('nombreImg') . '.' . $extension;
        $productos2->imagen = $nombre;
        $request->file('imagen')->storeAs('/public/productos/'.$vendedor->nombre, $nombre);


        $productos2->save();
        // $productos = producto::paginate();
        $productos = DB::table('productos')->select('*')->where('idVendedor','=',$request->input('idvendedor'))->orderBy('nombre', 'asc')->paginate();

        return view('productos.index', compact('productos', 'vendedor'));
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
        $productos = producto::FindOrFail($id);

        return view('productos.edit', compact('productos'));
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
        $productos2 = producto::findOrFail($id);
        $productos2->delete();
        $vendedor = Vendedor::findOrFail($productos2->idVendedor);

        $productos = producto::paginate();
        return view('productos.index', compact('productos', 'vendedor'));
    }

    public function buscar(Request $request){
        $vendedor = Vendedor::find($request->input('idvendedor'));
        $busqueda = trim($request->get('busqueda'));
        $productos = DB::table('productos')->select('id','nombre')->where('nombre','LIKE','%'.$busqueda.'%')->where('idVendedor', $request->input('idvendedor'))->orderBy('nombre')->paginate(50);
        
        return view('productos.index', compact('productos', 'vendedor'));
    }
    public function details($id){
        $productos = producto::findOrFail($id);
        $vendedor = Vendedor::findOrFail($productos->idVendedor);
        return view('productos.viewDetails', compact('productos', 'vendedor'));
    }
    public function actualizar(Request $request, $id){
        $productos2 = producto::findOrFail($id);
        $productos2->nombre = $request->input('nombre');
        $productos2->Precio = floatval($request->input('precio'));
        $productos2->stock = $request->input('stock');
        $productos2->tag = $request->input('tag');
        $productos2->descripcion = $request->input('descripcion');
        $productos2->imagen = $request->input('nombreImg');
        $productos2->save();

        $vendedor = Vendedor::find($request->input('idvendedor'));
        // $productos = producto::paginate();
        $productos = DB::table('productos')->select('*')->where('idVendedor','=',$vendedor->id)->orderBy('nombre', 'asc')->paginate();
        return view('productos.index', compact('productos', 'vendedor'));


    }
}
