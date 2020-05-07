<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new  \App\Product([
            'title' => 'Two States',
            'imagePath' => 'https://upload.wikimedia.org/wikipedia/en/3/3a/2_States_-_The_Story_Of_My_Marriage.jpg" class="image-responsive',
            'description' => 'Awesome love story of two couples from a different state of India',
            'price'      => 50
        ]);
        $product->save();


        $product = new  \App\Product([
                'title' => 'Three States',
                'imagePath' => 'https://upload.wikimedia.org/wikipedia/en/3/3a/2_States_-_The_Story_Of_My_Marriage.jpg" class="image-responsive',
                'description' => 'Awesome love story of two couples from a different state of India',
                'price'      => 60

        ]);
        $product->save();


        $product = new  \App\Product([
            'title' => 'Four States',
            'imagePath' => 'https://upload.wikimedia.org/wikipedia/en/3/3a/2_States_-_The_Story_Of_My_Marriage.jpg" class="image-responsive',
            'description' => 'Awesome love story of two couples from a different state of India',
            'price'      => 70

        ]);
        $product->save();


        $product = new  \App\Product([
            'title' => 'Five States',
            'imagePath' => 'https://upload.wikimedia.org/wikipedia/en/3/3a/2_States_-_The_Story_Of_My_Marriage.jpg" class="image-responsive',
            'description' => 'Awesome love story of two couples from a different state of India',
            'price'      => 80

        ]);
        $product->save();


        $product = new  \App\Product([
            'title' => 'Six States',
            'imagePath' => 'https://upload.wikimedia.org/wikipedia/en/3/3a/2_States_-_The_Story_Of_My_Marriage.jpg" class="image-responsive',
            'description' => 'Awesome love story of two couples from a different state of India',
            'price'      => 90

        ]);
        $product->save();


        $product = new  \App\Product([
            'title' => 'Seven States',
            'imagePath' => 'https://upload.wikimedia.org/wikipedia/en/3/3a/2_States_-_The_Story_Of_My_Marriage.jpg" class="image-responsive',
            'description' => 'Awesome love story of two couples from a different state of India',
            'price'      => 100

        ]);
        $product->save();
    }
}
