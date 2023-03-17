<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function index()
    {
        $categorias =  miFuncion();
        return view('home', compact('categorias'));
    }
    public function productList(Request $request)
    {
        $productos = Product::query();
        if ($request->has('subcategory')) {
            $productos->where('subcategory_id', $request->subcategory);
        }
        $categorias = miFuncion(); // obtiene las categorías
        $productos = $productos->paginate(10);

        // obtiene las subcategorías y los productos correspondientes
        $subcategorias = Subcategory::whereHas('products')->with('products')->get();
        return view('productList', compact('categorias', 'subcategorias', 'productos'));
    }
    public function listadoDash()
    {
        $categorias = miFuncion(); // obtiene las categorías
        $productos = Product::get();
        return view('dashboard', compact('categorias', 'productos'));
    }
    public function destroy($id) {
        $productos= Product::findOrfail($id);
        $productos->delete();

        return redirect()->route('dashboard');
    }
}
