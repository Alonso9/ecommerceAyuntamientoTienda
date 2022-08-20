<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;
use App\Models\Vendedor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use PhpParser\Node\Stmt\TryCatch;

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

    public function mapa(){
        return view('StoreViews.mapa');
    }

    public function postFacebook(){
        
        $respuesta = file_get_contents("https://graph.facebook.com/v12.0/" . env('FACEBOOK_USER_ID') . "?fields=published_posts.limit(8){created_time,message,full_picture,id,attachments{url}}&access_token=" . env('FACEBOOK_ACCES_TOKEN'));
        $datos = json_decode($respuesta, true);

        $productos = DB::table('productos')
                        ->leftJoin('vendedores', 'productos.IdVendedor', 'vendedores.id')
                        ->select('productos.*', 'vendedores.id AS nombre_id','vendedores.nombre AS nombre_vendedor', 'vendedores.foto AS foto_vendedor')
                        ->orderBy('id','DESC')
                        ->paginate(4);
        // return $datos;
        // dd($datos);
        return view('welcome', compact('datos', 'productos'));
    }
    
}
