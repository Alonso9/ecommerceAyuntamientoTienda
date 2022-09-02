<?php

namespace App\Http\Controllers;
use App\Models\Eventos;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $eventos = Eventos::paginate();
        return view('eventos.index', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('eventos.create');
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
        $eventos = new Eventos();
        $eventos->nombre = $request->input('nombre');
        $eventos->tag = $request->input('tag');
        $eventos->descripcion = $request->input('descripcion');
        $eventos->FechaEvento = $request->input('FechaEvento');
        $eventos->hora = $request->input('time');

        $eventos->imagen = $request->file('imagen')->getClientOriginalName();

        $request->file('imagen')->storeAs('/public/Eventos/',$eventos->imagen);

        $eventos->save();

        return redirect()->route('eventos.index');
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
        $evento = Eventos::findOrFail($id);

        return view('eventos.edit', compact('evento'));
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
        $evento = Eventos::findOrFail($id);
        $evento->nombre = $request->input('nombre');
        $evento->tag = $request->input('tag');
        $evento->descripcion = $request->input('descripcion');
        $evento->FechaEvento = $request->input('FechaEvento');
        $evento->fechaExpiracion = $request->input('FechaEvento');

        if(!empty($evento->imagen = $request->file('imagen')->getClientOriginalName())){
            $request->file('imagen')->storeAs('/public/Eventos/',$evento->imagen);
        }else{
            
        }

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
        $evento = Eventos::findOrFail($id);
        $evento->delete();
        File::delete(storage_path('app/public/Eventos/'. $evento->imagen));
        return redirect()->route('eventos.index');
    }

    public function details($id){
        $evento = Eventos::findOrFail($id);

        // return dd($eventos);
        return view('eventos.detalles', compact('evento'));
    }

    public function buscar(Request $request){
        $busqueda = trim($request->get('busqueda'));
        $eventos = DB::table('eventos')->select('id','nombre','FechaEvento')->where('nombre','LIKE','%'.$busqueda.'%')->orderBy('nombre')->paginate(10);

        // return dd($eventos);
        return view('eventos.index', compact('eventos'));
    }
}
