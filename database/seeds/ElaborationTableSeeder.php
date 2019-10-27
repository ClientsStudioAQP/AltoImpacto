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
        // $this->call(UsersTableSeeder::class);
    }
}
