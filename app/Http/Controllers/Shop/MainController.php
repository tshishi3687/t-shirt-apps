<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Produit;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {

        // SELECT * FROM produits

        $produits = Produit::all();
//        $categories = Category::where('is_online',1)->get();

//        dd($produits);

        return view('shop.index', compact('produits'));

    }

    public function produit(Request $request){

        // SELECT * FROM produit WHERE id= ?
//        dd($request->id);

        $produit = Produit::find($request->id);
//        $categories = Category::where('is_online',1)->get();

        return view('shop.produit', compact('produit'));
    }

    public function viewByCategory(Request $request){

        // SELECT * FROM catedories where is_online = 1

//        $categories = Category::where('is_online',1)->get();
//        dd($categorie);

        // SELECT * FROM produits WHERE category_id = ?
//        $produits = Produit::where('category_id',$request->id)->get();
        $category = Category::find($request->id);
        $produits = $category->produits();

        return view('shop.categorie', compact('produits', 'category'));
    }
}
