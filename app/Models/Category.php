<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function parent() {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function childrens() {
       return $this->hasMany(Category::class,'parent_id');
    }

    public function produitsParent() {
        return $this->hasMany(Produit::class);
    }

    // recup produits dans une cat enfant au travers d'une catégorie parent
    public function produitsChild() {
        return $this->hasManyThrough(Produit::class, Category::class,'parent_id','category_id');
    }

    public function produits() {
        $produits = $this->produitsParent()->get()->merge($this->produitsChild()->get());
        return $produits;
    }

}
