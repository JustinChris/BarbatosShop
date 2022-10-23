<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'userName' => 'Joko',
            'userEmail' => 'joke-o@gmail.com',
            'password' => 'joko1234',
            'userGender' => 'Male',
            'userDoB' => '2022-10-22',
            'userCountry' => 'India',
            'userPhoto' => 'https://broonet.com/wp-content/uploads/2020/03/mewarnai-gambar-kartun-1.jpg',
            'userRole' => 'Admin'
        ]);

        Product::create([
        'categoryID' => '1',
        'productName' => 'Frixion Ballpoint',
        'productDetail'=> 'Bolpen yang bisa dihapus dari pilot',
        'productPrice' => '25000',
        'productPhoto' => 'https://static2.jetpens.com/images/a/000/022/22899.jpg?ba=middle%2Ccenter&balph=3&blend64=aHR0cDovL3d3dy5qZXRwZW5zLmNvbS9pbWFnZXMvYXNzZXRzL3dhdGVybWFyazIucG5n&bm=difference&bs=inherit&mark64=aHR0cDovL3d3dy5qZXRwZW5zLmNvbS9pbWFnZXMvYXNzZXRzL3dhdGVybWFyazEucG5n&markalign=top%2Cright&markalpha=30&markscale=16&q=90&w=600&s=3d35d4c5d2af7c5b3761e52b47ae3c78'
        ]);
    }
}
