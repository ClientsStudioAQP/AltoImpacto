<?php

use Illuminate\Database\Seeder;
use App\Elaboration;
use App\User;
use App\Category;

class ElaborationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Elaboration::truncate();
        Category::truncate();
        User::truncate();

        $user = new User;
        $user->name = "AdministradorAI";
        $user->email = "admin@altoimpacto.com";
        $user->password = bcrypt('75948647');
        $user->save();


        $category = new Category;
        $category->name = "Servicios";
        $category->save();

        $category = new Category;
        $category->name = "Productos";
        $category->save();

        $post = new Elaboration;
        $post->name = "Plumas Credinka";
        $post->link_post = "https://www.facebook.com/altoimpactopublicidad/photos/a.167588033269624/2750515281643540/?type=3&theater";
        $post->category_id = 1;
        $post->save();

        $post = new Elaboration;
        $post->name = "Teatro Universidad Catolica San Pablo";
        $post->link_post = "https://www.facebook.com/altoimpactopublicidad/photos/a.167588033269624/2853477691347298/?type=3&theater";
        $post->category_id = 2;
        $post->save();
        // $this->call(UsersTableSeeder::class);
    }
}
