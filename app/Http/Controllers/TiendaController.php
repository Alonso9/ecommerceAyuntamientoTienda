<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;
use App\Models\Vendedor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class TiendaController extends Controller
{
    //
    public function index()
    {
        //

        return view('StoreViews.index');
    }

    public function aboutUs()
    {
        //

        return view('StoreViews.aboutUs');
    }

    public function productores(){
        $productos = DB::table('productos')
                        ->leftJoin('vendedores', 'productos.IdVendedor', 'vendedores.id')
                        ->select('productos.*', 'vendedores.id AS nombre_id','vendedores.nombre AS nombre_vendedor', 'vendedores.foto AS foto_vendedor')
                        ->paginate();

        return view('StoreViews.productores', compact('productos'));
        // return $productos;
    }

    
    public function contacto($id){
        $vendedor = Vendedor::findOrFail($id);
        $productos = producto::paginate();

        return view('StoreViews.contacto', compact('vendedor', 'productos'));
    }

    public function viewProducto($id){
        $productos = producto::findOrFail($id);
        $vendedor = Vendedor::findOrFail($productos->idVendedor);
        
    return view('StoreViews.producto', compact('productos', 'vendedor'));
    // return $id;

    }
    
}
