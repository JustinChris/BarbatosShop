<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'categoryID' => 3,
            'productName' => 'Frixion Ballpoint',
            'productDetail'=> 'Bolpen yang bisa dihapus dari pilot',
            'productPrice' => 25000,
            'productPhoto' => 'https://static2.jetpens.com/images/a/000/022/22899.jpg?ba=middle%2Ccenter&balph=3&blend64=aHR0cDovL3d3dy5qZXRwZW5zLmNvbS9pbWFnZXMvYXNzZXRzL3dhdGVybWFyazIucG5n&bm=difference&bs=inherit&mark64=aHR0cDovL3d3dy5qZXRwZW5zLmNvbS9pbWFnZXMvYXNzZXRzL3dhdGVybWFyazEucG5n&markalign=top%2Cright&markalpha=30&markscale=16&q=90&w=600&s=3d35d4c5d2af7c5b3761e52b47ae3c78'
        ]);

        Product::create([
            'categoryID' => 3,
            'productName' => 'Penghapus Joyko',
            'productDetail'=> 'Penghapus hitam merk Joyko',
            'productPrice' => 2000,
            'productPhoto' => 'placeholder'
        ]);

        Product::create([
            'categoryID' => 3,
            'productName' => 'Pensil 2B',
            'productDetail'=> 'Pensil 2B merk Fabercastle untuk ujian menggunakan scan',
            'productPrice' => 1000,
            'productPhoto' => 'placeholder'
        ]);

        Product::create([
            'categoryID' => 1,
            'productName' => 'Laptop Asus GX021',
            'productDetail'=> 'Laptop Asus GX021 cocok digunakan untuk bermain game. Buat kalian para Gamers!',
            'productPrice' => 5000000,
            'productPhoto' => 'placeholder'
        ]);

        Product::create([
            'categoryID' => 1,
            'productName' => 'Headphone GR987',
            'productDetail'=> 'Headphone GR987 cocok digunakan untuk bermain game. Buat kalian para Gamers!',
            'productPrice' => 250000,
            'productPhoto' => 'placeholder'
        ]);

        Product::create([
            'categoryID' => 1,
            'productName' => 'Kabel HDMI to HDMI',
            'productDetail'=> 'Kabel HDMI to HDMI cocok digunakan untuk menyambungkan monitor dan CPU. Koneksi cepat, kabel shielded kualitas terbaik',
            'productPrice' => 150000,
            'productPhoto' => 'placeholder'
        ]);

        Product::create([
            'categoryID' => 1,
            'productName' => 'Microphone GX111',
            'productDetail'=> 'Microphone GX111 suara jernih tidak ada cacat. Cocok untuk streaming atau recording',
            'productPrice' => 150000,
            'productPhoto' => 'placeholder'
        ]);

        Product::create([
            'categoryID' => 1,
            'productName' => 'Webcam GX211',
            'productDetail'=> 'Webcam GX211 gambar HD tidak ada cacat. Cocok untuk streaming atau recording',
            'productPrice' => 250000,
            'productPhoto' => 'placeholder'
        ]);

        Product::create([
            'categoryID' => 1,
            'productName' => 'Keyboard GX311',
            'productDetail'=> 'Keyboard GX311 brown keycaps Mechanical Keyboard',
            'productPrice' => 350000,
            'productPhoto' => 'placeholder'
        ]);

        Product::create([
            'categoryID' => 1,
            'productName' => 'Keyboard GX312',
            'productDetail'=> 'Keyboard GX312 brown keycaps Mechanical Keyboard',
            'productPrice' => 35000,
            'productPhoto' => 'placeholder'
        ]);

        Product::create([
            'categoryID' => 1,
            'productName' => 'Keyboard GX310',
            'productDetail'=> 'Keyboard GX310 brown keycaps Mechanical Keyboard',
            'productPrice' => 450000,
            'productPhoto' => 'placeholder'
        ]);

        Product::create([
            'categoryID' => 1,
            'productName' => 'Keyboard GX321',
            'productDetail'=> 'Keyboard GX321 brown keycaps Mechanical Keyboard',
            'productPrice' => 550000,
            'productPhoto' => 'placeholder'
        ]);

        Product::create([
            'categoryID' => 1,
            'productName' => 'Keyboard GX331',
            'productDetail'=> 'Keyboard GX331 brown keycaps Mechanical Keyboard',
            'productPrice' => 475000,
            'productPhoto' => 'placeholder'
        ]);

        Product::create([
            'categoryID' => 1,
            'productName' => 'Keyboard GX391',
            'productDetail'=> 'Keyboard GX391 brown keycaps Mechanical Keyboard',
            'productPrice' => 485000,
            'productPhoto' => 'placeholder'
        ]);

        Product::create([
            'categoryID' => 1,
            'productName' => 'Mouse GX411',
            'productDetail'=> 'Mouse GX411 Awet tidak mudah rusak, tahan banting lifespan 100 juta klik',
            'productPrice' => 550000,
            'productPhoto' => 'placeholder'
        ]);

        Product::create([
            'categoryID' => 2,
            'productName' => 'Dinosaurus 12x14cm',
            'productDetail'=> 'Mainan Dinosaurus ukuran 12cm x 14 cm cocok untuk balita usia 5 tahun keatas.',
            'productPrice' => 10000,
            'productPhoto' => 'placeholder'
        ]);

        Product::create([
            'categoryID' => 2,
            'productName' => 'Lilin 10x10cm',
            'productDetail'=> 'Mainan Lilin ukuran 10cm x 10 cm cocok untuk balita usia 5 tahun keatas.',
            'productPrice' => 15000,
            'productPhoto' => 'placeholder'
        ]);

        Product::create([
            'categoryID' => 2,
            'productName' => 'Kamera Mainan 10x10cm',
            'productDetail'=> 'Mainan Kamera ukuran 10cm x 10 cm cocok untuk balita hobi fotografi.',
            'productPrice' => 20000,
            'productPhoto' => 'placeholder'
        ]);

        Product::create([
            'categoryID' => 2,
            'productName' => 'Mobil Mainan 15x5cm',
            'productDetail'=> 'Mainan mobil-mobilan ukuran 15cm x 5 cm cocok untuk koleksi dan hobi.',
            'productPrice' => 20000,
            'productPhoto' => 'placeholder'
        ]);
    }
}
