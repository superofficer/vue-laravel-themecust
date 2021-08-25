<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $code = [
            'f230fh0g3', 'nvklal433', 'zz21cz3c1', '244wgerg2', 'h456wer53', 'av2231fwg', 'bib36pfvm', 'mbvjkgip5', 'vbb124btr', 'cm230f032',
            'plb34234v', '4920nnc2d', '250vm23cc', 'fldsmn31b', 'waas1x2as', 'vb34btbg5', 'k8l6j58jl', 'v435nn85n', '09zx9c0zc', 'mnb5mb2m5',
            'r23fwf2w3', 'pxpzczo23', '2c42cb5cb', '5k43kkk23', 'lm2tny2k4', 'nbm5mv45n', 'zx23zc42c', 'acvx872gc', 'tx125ck42', 'gwuby345v'
        ];
        $name = [
            'Bamboo Watch', 'Black Watch', 'Blue Band', 'Blue T-Shirt', 'Bracelet', 'Brown Purse', 'Chakra Bracelet', 'Galaxy Earrings', 'Game Controller', 'Gaming Set',
            'Gold Phone Case', 'Green Earbuds', 'Green T-Shirt', 'Grey T-Shirt', 'Headphones', 'Light Green T-Shirt', 'Lime Band', 'Mini Speakers', 'Painted Phone Case', 'Pink Band',
            'Pink Purse', 'Purple Band', 'Purple Gemstone Necklace', 'Purple T-Shirt', 'Shoes', 'Sneakers', 'Teal T-Shirt', 'Yellow Earbuds', 'Yoga Mat', 'Yoga Set'
        ];
        $description = [
            'Product Description', 'Product Description', 'Product Description', 'Product Description', 'Product Description', 'Product Description', 'Product Description', 'Product Description', 'Product Description', 'Product Description',
            'Product Description', 'Product Description', 'Product Description', 'Product Description', 'Product Description', 'Product Description', 'Product Description', 'Product Description', 'Product Description', 'Product Description',
            'Product Description', 'Product Description', 'Product Description', 'Product Description', 'Product Description', 'Product Description', 'Product Description', 'Product Description', 'Product Description', 'Product Description',
        ];
        $image = [
            'bamboo-watch.jpg', 'black-watch.jpg', 'blue-band.jpg', 'blue-t-shirt.jpg', 'bracelet.jpg', 'brown-purse.jpg', 'chakra-bracelet.jpg', 'galaxy-earrings.jpg', 'game-controller.jpg', 'gaming-set.jpg',
            'gold-phone-case.jpg', 'green-earbuds.jpg', 'green-t-shirt.jpg', 'grey-t-shirt.jpg', 'headphones.jpg', 'light-green-t-shirt.jpg', 'lime-band.jpg', 'mini-speakers.jpg', 'painted-phone-case.jpg', 'pink-band.jpg',
            'pink-purse.jpg', 'purple-band.jpg', 'purple-gemstone-necklace.jpg', 'purple-t-shirt.jpg', 'shoes.jpg', 'sneakers.jpg', 'teal-t-shirt.jpg', 'yellow-earbuds.jpg', 'yoga-mat.jpg', 'yoga-set.jpg'
        ];
        $price = [
            65, 72, 79, 29, 15, 120, 32, 34, 99, 299,
            24, 89, 49, 48, 175, 49, 79, 85, 56, 79,
            110, 79, 45, 49, 64, 78, 49, 89, 20, 20
        ];
        $category = [
            'Accessories', 'Accessories', 'Fitness', 'Clothing', 'Accessories', 'Accessories', 'Accessories', 'Accessories', 'Electronics', 'Electronics',
            'Accessories', 'Electronics', 'Clothing', 'Clothing', 'Electronics', 'Clothing', 'Fitness', 'Clothing', 'Accessories', 'Fitness',
            'Accessories', 'Fitness', 'Accessories', 'Clothing', 'Clothing', 'Clothing', 'Clothing', 'Electronics', 'Fitness', 'Fitness'
        ];
        $inventoryStatus = [
            'INSTOCK', 'INSTOCK', 'LOWSTOCK', 'INSTOCK', 'INSTOCK', 'OUTOFSTOCK', 'LOWSTOCK', 'INSTOCK', 'LOWSTOCK', 'INSTOCK',
            'OUTOFSTOCK', 'INSTOCK', 'INSTOCK', 'OUTOFSTOCK', 'LOWSTOCK', 'INSTOCK', 'INSTOCK', 'INSTOCK', 'INSTOCK', 'INSTOCK',
            'OUTOFSTOCK', 'LOWSTOCK', 'INSTOCK', 'LOWSTOCK', 'INSTOCK', 'INSTOCK', 'LOWSTOCK', 'INSTOCK', 'INSTOCK', 'INSTOCK'
        ];
        $quality = [
            24, 61, 2, 25, 73, 0, 5, 23, 2, 63,
            0, 23, 74, 0, 8, 34, 12, 42, 41, 63,
            0, 6, 62, 2, 0, 52, 3, 35, 15, 25
        ];
        $rating = [
            5, 4, 3, 5, 4, 4, 3, 5, 4, 3,
            4, 4, 5, 3, 5, 4, 3, 4, 5, 4,
            4, 3, 4, 5, 4, 4, 3, 3, 5, 5
        ];
        for ( $i = 0; $i < 30; $i++ ) {
            Product::create([
                'code' => $code[$i],
                'name' => $name[$i],
                'description' => $description[$i],
                'image' => $image[$i],
                'price' => $price[$i],
                'category' => $category[$i],
                'inventoryStatus' => $inventoryStatus[$i],
                'quality' => $quality[$i],
                'rating' => $rating[$i],
            ]);
        }
    }
}
