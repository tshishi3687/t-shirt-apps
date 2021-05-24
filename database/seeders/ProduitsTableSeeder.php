<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produit = new Produit();
        $produit->nom = "T-Shirt Color phone";
        $produit->prix_ht = 25;
        $produit->description = "T-Shirt noir avec logo V|V|>";
        $produit->photo_principale = "25748_9513524_1741868_2f83dce9_image.jpg";
        $produit->category_id = 7;
        $produit->save();

        $produit = new Produit();
        $produit->nom = "T-Shirt i am vegan";
        $produit->prix_ht = 25;
        $produit->description = "T-Shirt noir avec logo i am VEGAN";
        $produit->photo_principale = "25748_18548523_3372192_0793781b_image.jpg";
        $produit->category_id = 7;
        $produit->save();

        $produit = new Produit();
        $produit->nom = "T-Shirt Loup astral";
        $produit->prix_ht = 25;
        $produit->description = "T-Shirt noir avec logo Loup astral";
        $produit->photo_principale = "angry-wolf-head-illustration-with-t-shirt-design_373096-191.jpg";
        $produit->category_id = 6;
        $produit->save();

        $produit = new Produit();
        $produit->nom = "T-Shirt Cerf astral";
        $produit->prix_ht = 25;
        $produit->description = "T-Shirt noir avec logo Cerf astral";
        $produit->photo_principale = "deer-head-ornament-style-with-t-shirt-design_373096-189.jpg";
        $produit->category_id = 6;
        $produit->save();

        $produit = new Produit();
        $produit->nom = "T-Shirt Méduse astral";
        $produit->prix_ht = 25;
        $produit->description = "T-Shirt noir avec logo Méduse astral";
        $produit->photo_principale = "ff0f9ccd38a455e1cec3cb48cdc29c5a.jpg";
        $produit->category_id = 6;
        $produit->save();

        $produit = new Produit();
        $produit->nom = "T-Shirt Lion astral";
        $produit->prix_ht = 25;
        $produit->description = "T-Shirt noir avec logo Lion astral";
        $produit->photo_principale = "illustration-angry-lion-head-with-t-shirt-design_373096-199.jpg";
        $produit->category_id = 6;
        $produit->save();

        $produit = new Produit();
        $produit->nom = "T-Shirt Eléphant astral";
        $produit->prix_ht = 25;
        $produit->description = "T-Shirt noir avec logo Eléphant astral";
        $produit->photo_principale = "illustration-elephant-head-mandala-style-with-t-shirt-design_373096-193.jpg";
        $produit->category_id = 6;
        $produit->save();

        $produit = new Produit();
        $produit->nom = "T-Shirt Pirate astral";
        $produit->prix_ht = 25;
        $produit->description = "T-Shirt noir avec logo Pirate astral";
        $produit->photo_principale = "illustration-samurai-head-with-t-shirt-design_373096-340.jpg";
        $produit->category_id = 6;
        $produit->save();

        $produit = new Produit();
        $produit->nom = "T-Shirt Samourai astral";
        $produit->prix_ht = 25;
        $produit->description = "T-Shirt noir avec logo Samourai astral";
        $produit->photo_principale = "kucing-samurai-pattern-T-shirt-printing-vector.jpg";
        $produit->category_id = 6;
        $produit->save();

        $produit = new Produit();
        $produit->nom = "T-Shirt Goonies";
        $produit->prix_ht = 25;
        $produit->description = "T-Shirt du film les Goonies";
        $produit->photo_principale = "goonies.jpg";
        $produit->category_id = 1;
        $produit->save();

        $produit = new Produit();
        $produit->nom = "T-Shirt Star Trek";
        $produit->prix_ht = 23;
        $produit->description = "T-Shirt du film Star Trek";
        $produit->photo_principale = "star_trek_kirk.jpg";
        $produit->category_id = 1;
        $produit->save();

        $produit = new Produit();
        $produit->nom = "T-Shirt Hulk";
        $produit->prix_ht = 29;
        $produit->description = "T-Shirt Hulk";
        $produit->photo_principale = "hulk.jpg";
        $produit->category_id = 1;
        $produit->save();

        $produit = new Produit();
        $produit->nom = "T-Shirt Wonder Woman";
        $produit->prix_ht = 19;
        $produit->description = "T-Shirt Wonder Woman";
        $produit->photo_principale = "wonder_woman.jpg";
        $produit->category_id = 2;
        $produit->save();

        $produit = new Produit();
        $produit->nom = "T-Shirt Les Simpsons";
        $produit->prix_ht = 22;
        $produit->description = "T-Shirt Les Simpsons";
        $produit->photo_principale = "simpsons.jpg";
        $produit->category_id = 2;
        $produit->save();

        $produit = new Produit();
        $produit->nom = "T-Shirt M. Happy";
        $produit->prix_ht = 22;
        $produit->description = "T-Shirt qui rend heureux";
        $produit->photo_principale = "happy.jpg";
        $produit->category_id = 3;
        $produit->save();

        $produit = new Produit();
        $produit->nom = "T-Shirt Little Miss Sunshine";
        $produit->prix_ht = 22;
        $produit->description = "T-Shirt belle aventure familiale";
        $produit->photo_principale = "little_miss_sunshine.jpg";
        $produit->category_id = 5;
        $produit->save();

        $produit = new Produit();
        $produit->nom = "T-Shirt Krusty le Clown";
        $produit->prix_ht = 22;
        $produit->description = "T-Shirt T-shirt qui rend super rigolo et cynique";
        $produit->photo_principale = "krusty_simpsons.jpg";
        $produit->category_id = 4;
        $produit->save();
    }
}
