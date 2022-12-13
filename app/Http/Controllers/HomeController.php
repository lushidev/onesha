<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\EntrepriseRepositorie;
use App\Models\Entreprise;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    
    public function entreprise(string $url){
        Entreprise::all();
        $entreprise = new EntrepriseRepositorie();
        $url_name = $entreprise->entreprise_url($url);
      
        $entreprise_id = $entreprise->entreprise_id($url);

        if($url_name){
            $entreprises = Entreprise::where('name',$url)->with('categories')->first();

            
            $categories = Product::join('categories','categories.id','=','products.category_id')->
            where('categories.entreprise_id','=',$entreprise_id)
            ->get(["categories.name as cname","products.*"]);
            
               
           
            return view('shop.index',compact('entreprises','categories'));
        }else{
            return redirect(route('index'));
        }

        

    }
}
