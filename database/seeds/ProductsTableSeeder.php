<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Krzyżyk złoty',
            'slug' => 'krzyzyk',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'price' => 399.99,
            'image' => '1.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Pierścionek złoty',
            'slug' => 'pierscionek',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'price' => 449.99,
            'image' => '2.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Pierścionek',
            'slug' => 'pierscionek2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'price' => 2299.99,
            'image' => '3.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Łańczuek',
            'slug' => 'lancuch',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'price' => 799.99,
            'image' => '4.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Bursztyn złoty',
            'slug' => 'bursztyn1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'price' => 699.99,
            'image' => '5.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Bursztyn',
            'slug' => 'bursztyn2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'price' => 899.99,
            'image' => '6.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Krucyfiks',
            'slug' => 'krucyfiks1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'price' => 99.99,
            'image' => '7.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Krucyfiks prostokątny',
            'slug' => 'krucyfiks2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'price' => 499.99,
            'image' => '8.jpg',
        ]);
    }
}
