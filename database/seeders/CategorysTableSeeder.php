<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $categories = new Category();
//        $categories->nom = "Films";
//        $categories->is_online = 1;
//        $categories->save();
//
//        $categories2 = new Category();
//        $categories2->nom = "Séries TV";
//        $categories2->is_online = 1;
//        $categories2->save();
//
//        $categories3 = new Category();
//        $categories3->nom = "Musiques";
//        $categories3->is_online = 1;
//        $categories3->save();
//
//        $categories4 = new Category();
//        $categories4->nom = "Jeux-Vidéos";
//        $categories4->is_online = 1;
//        $categories4->save();
//
//        $categories5 = new Category();
//        $categories5->nom = "Sport";
//        $categories5->is_online = 1;
//        $categories5->save();
//
//        $categories5 = new Category();
//        $categories5->nom = "Astral";
//        $categories5->is_online = 1;
//        $categories5->save();

        $categories5 = new Category();
        $categories5->nom = "Les goonies";
        $categories5->is_online = 1;
        $categories5->parent_id = 1;
        $categories5->save();

        $categories5 = new Category();
        $categories5->nom = "Star Wars";
        $categories5->is_online = 1;
        $categories5->parent_id = 1;
        $categories5->save();

        $categories5 = new Category();
        $categories5->nom = "Sta Trek";
        $categories5->is_online = 1;
        $categories5->parent_id = 1;
        $categories5->save();

        $categories5 = new Category();
        $categories5->nom = "Superman";
        $categories5->is_online = 1;
        $categories5->parent_id = 1;
        $categories5->save();

        $categories5 = new Category();
        $categories5->nom = "Tom Raider";
        $categories5->is_online = 1;
        $categories5->parent_id = 4;
        $categories5->save();

        $categories5 = new Category();
        $categories5->nom = "GTA";
        $categories5->is_online = 1;
        $categories5->parent_id = 4;
        $categories5->save();
    }
}
