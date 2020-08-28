<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        Product::create([
            'name' => 'tshirt-blue',
            'slug'=>'tshirt',
            'details'=> 'nice blue cotton',
            'price'=> 546,
            'image'=>'2.jpg',
            'description'=>'ffhgfg ghghg jkghrfyu gdgdg'

                    ]);

        Product::create([
            'name' => 'tshirt-red',
            'slug'=>'tshirtred',
            'details'=> 'nice red cotton',
            'price'=> 545,
            'image'=>'3.jpg',
            'description'=>'ffhgfg ghghg jkghrfyu gdgdg'

        ]);

        Product::create([
            'name' => 'tshirt1-green',
            'slug'=>'tshirtg',
            'details'=> 'nice green cotton',
            'price'=> 456,
            'image'=>'4.jpg',
            'description'=>'ffhgfg ghghg jkghrfyu gdgdg'

        ]);

        Product::create([
            'name' => 'tshirt2-black',
            'slug'=>'tshirtblack',
            'details'=> 'nice black cotton',
            'price'=> 56,
            'image'=>'5.jpg',
            'description'=>'ffhgfg ghghg jkghrfyu gdgdg'

        ]);

        Product::create([
            'name' => 'tshirt3-yellow',
            'slug'=>'tshirtyellow',
            'details'=> 'nice yellow cotton',
            'price'=> 5456,
            'image'=>'6.jpg',
            'description'=>'ffhgfg ghghg jkghrfyu gdgdg'

        ]);

        Product::create([
            'name' => 'tshirt7-green',
            'slug'=>'tshirtg7',
            'details'=> 'nice green cotton',
            'price'=> 457,
            'image'=>'7.jpg',
            'description'=>'ffhgfg ghghg jkghrfyu gdgdg'

        ]);

        Product::create([
            'name' => 'tshirt8-green',
            'slug'=>'tshirtg8',
            'details'=> 'nice green cotton',
            'price'=> 4586,
            'image'=>'8.jpg',
            'description'=>'ffhgfg ghghg jkghrfyu gdgdg'

        ]);
        Product::create([
            'name' => 'tshirt9-green',
            'slug'=>'tshirtg9',
            'details'=> 'nice green cotton',
            'price'=> 456,
            'image'=>'9.jpg',
            'description'=>'ffhgfg ghghg jkghrfyu gdgdg'

        ]);
        Product::create([
            'name' => 'tshirt10-green',
            'slug'=>'tshirtg10',
            'details'=> 'nice green cotton',
            'price'=> 356,
            'image'=>'10.jpg',
            'description'=>'ffhgfg ghghg jkghrfyu gdgdg'

        ]);

    }
}
