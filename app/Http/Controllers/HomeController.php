<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\EntrepriseRepositorie;
use App\Models\Entreprise;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function entreprise(string $url){
        $entreprise = new EntrepriseRepositorie();
        $url_name = $entreprise->entreprise_url($url);
        $entreprise_id = $entreprise->entreprise_id($url);

        if($url_name){
            $entreprises = Entreprise::where('url_name',$url)->get();
            $categories = Category::where('entreprise_id',$entreprise_id)->get();
            
            
            return view('shop.index',['entreprises'=>$entreprises, 'categories'=>$categories]);
        }else{
            return redirect(route('index'));
        }

        

    }
}
