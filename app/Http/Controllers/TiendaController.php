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
        $vendedores =  Vendedor::paginate();
        $productos = producto::paginate();

        return view('StoreViews.productores', compact('vendedores', 'productos'));
    }

    
    public function contacto($id){
        $vendedor = Vendedor::findOrFail($id);
        $productos = producto::paginate();

        return view('StoreViews.contacto', compact('vendedor', 'productos'));
    }
    
}
