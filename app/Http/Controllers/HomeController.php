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
        $categorias = miFuncion();
         // obtiene las categorías
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
    public function destroy($id)
    {
        $producto = Product::findOrFail($id);
        $producto->delete();
    
        return redirect()->back()->with(['success' => 'El producto con ID '.$id.' se ha eliminado correctamente.']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'photo' => 'required|url',
            'subcategory_id' => 'required|exists:subcategories,id'
        ]);
       

        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->photo = $request->photo; // Almacenamos la URL de la imagen
        $product->subcategory_id = $request->subcategory_id;
        $product->save();

        return redirect()->route('dashboard')->with('success', 'El producto se ha añadido correctamente.');

    }
    public function photo($id)
    {
        $photo = DB::table('products')->select('photo')->where('id', $id)->first();
        return response(base64_decode($photo->photo))->header('Content-Type', 'image/jpeg');

    }

    
}
