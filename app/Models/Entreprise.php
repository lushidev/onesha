<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;

class Entreprise extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','name','url_name'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categories(){
        return $this->hasMany(Category::class);
    }
}
