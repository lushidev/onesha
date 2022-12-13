<?php

namespace App\Http\Repositories;

use App\Models\Entreprise;
use Auth;
class EntrepriseRepositorie {

	public function entreprise_name(){
		$user_id = Auth::user()->id;
		$entreprise = Entreprise::whereUser_id($user_id)->first();
		if(!empty($entreprise)) {
			return $entreprise->name;
		}
		
	}

	public function all_entreprise(){
		$entreprises = Entreprise::all();
		return $entreprises;
	}

	public function entreprise_url($name){
		$entreprise = Entreprise::whereName("lushidev")->first();

		return $entreprise->name;

	}

	public function entreprise_id($name){
		$entreprise = Entreprise::whereName($name)->first();

		return $entreprise->id;

	}




}