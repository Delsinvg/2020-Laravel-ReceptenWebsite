<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'name' => 'Carrot cake pannenkoekjes',
            'imagePath' => '',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id nisi non massa commodo suscipit. Praesent commodo ut sapien non mollis. Aliquam porttitor quam mollis tellus placerat semper. Ut commodo imperdiet lacus eu pharetra. Nullam tellus nisi, dignissim eget lacus quis, tincidunt efficitur neque. Sed imperdiet sit amet sapien a dapibus. Pellentesque vehicula maximus ante, nec mollis felis porttitor at. Fusce cursus luctus egestas. Aliquam faucibus est non vulputate rutrum.',
            'cookingTime' => '20 minuten',
            'visible' => false,
            'categoryId' => 1
        ]);

        DB::table('recipes')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'name' => 'Huenvos Rancheros',
            'imagePath' => '',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id nisi non massa commodo suscipit. Praesent commodo ut sapien non mollis. Aliquam porttitor quam mollis tellus placerat semper. Ut commodo imperdiet lacus eu pharetra. Nullam tellus nisi, dignissim eget lacus quis, tincidunt efficitur neque. Sed imperdiet sit amet sapien a dapibus. Pellentesque vehicula maximus ante, nec mollis felis porttitor at. Fusce cursus luctus egestas. Aliquam faucibus est non vulputate rutrum.',
            'cookingTime' => '20 minuten',
            'visible' => true,
            'categoryId' => 1
        ]);

        DB::table('recipes')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'name' => 'Carrot cake pannenkoekjes',
            'imagePath' => '',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id nisi non massa commodo suscipit. Praesent commodo ut sapien non mollis. Aliquam porttitor quam mollis tellus placerat semper. Ut commodo imperdiet lacus eu pharetra. Nullam tellus nisi, dignissim eget lacus quis, tincidunt efficitur neque. Sed imperdiet sit amet sapien a dapibus. Pellentesque vehicula maximus ante, nec mollis felis porttitor at. Fusce cursus luctus egestas. Aliquam faucibus est non vulputate rutrum.',
            'cookingTime' => '20 minuten',
            'visible' => true,
            'categoryId' => 1
        ]);

        DB::table('recipes')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'name' => 'Dutch baby',
            'imagePath' => '',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id nisi non massa commodo suscipit. Praesent commodo ut sapien non mollis. Aliquam porttitor quam mollis tellus placerat semper. Ut commodo imperdiet lacus eu pharetra. Nullam tellus nisi, dignissim eget lacus quis, tincidunt efficitur neque. Sed imperdiet sit amet sapien a dapibus. Pellentesque vehicula maximus ante, nec mollis felis porttitor at. Fusce cursus luctus egestas. Aliquam faucibus est non vulputate rutrum.',
            'cookingTime' => '20 minuten',
            'visible' => true,
            'categoryId' => 1
        ]);

        DB::table('recipes')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'name' => 'Tosti knakworst',
            'imagePath' => '',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id nisi non massa commodo suscipit. Praesent commodo ut sapien non mollis. Aliquam porttitor quam mollis tellus placerat semper. Ut commodo imperdiet lacus eu pharetra. Nullam tellus nisi, dignissim eget lacus quis, tincidunt efficitur neque. Sed imperdiet sit amet sapien a dapibus. Pellentesque vehicula maximus ante, nec mollis felis porttitor at. Fusce cursus luctus egestas. Aliquam faucibus est non vulputate rutrum.',
            'cookingTime' => '20 minuten',
            'visible' => true,
            'categoryId' => 2
        ]);

        DB::table('recipes')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'name' => 'Italiaanse broodjes',
            'imagePath' => '',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id nisi non massa commodo suscipit. Praesent commodo ut sapien non mollis. Aliquam porttitor quam mollis tellus placerat semper. Ut commodo imperdiet lacus eu pharetra. Nullam tellus nisi, dignissim eget lacus quis, tincidunt efficitur neque. Sed imperdiet sit amet sapien a dapibus. Pellentesque vehicula maximus ante, nec mollis felis porttitor at. Fusce cursus luctus egestas. Aliquam faucibus est non vulputate rutrum.',
            'cookingTime' => '50 minuten',
            'visible' => true,
            'categoryId' => 2
        ]);

        DB::table('recipes')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'name' => 'Rosti Omelet',
            'imagePath' => '',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id nisi non massa commodo suscipit. Praesent commodo ut sapien non mollis. Aliquam porttitor quam mollis tellus placerat semper. Ut commodo imperdiet lacus eu pharetra. Nullam tellus nisi, dignissim eget lacus quis, tincidunt efficitur neque. Sed imperdiet sit amet sapien a dapibus. Pellentesque vehicula maximus ante, nec mollis felis porttitor at. Fusce cursus luctus egestas. Aliquam faucibus est non vulputate rutrum.',
            'cookingTime' => '25 minuten',
            'visible' => true,
            'categoryId' => 2
        ]);

        DB::table('recipes')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'name' => 'Puddingbroodjes',
            'imagePath' => '',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id nisi non massa commodo suscipit. Praesent commodo ut sapien non mollis. Aliquam porttitor quam mollis tellus placerat semper. Ut commodo imperdiet lacus eu pharetra. Nullam tellus nisi, dignissim eget lacus quis, tincidunt efficitur neque. Sed imperdiet sit amet sapien a dapibus. Pellentesque vehicula maximus ante, nec mollis felis porttitor at. Fusce cursus luctus egestas. Aliquam faucibus est non vulputate rutrum.',
            'cookingTime' => '30 minuten',
            'visible' => true,
            'categoryId' => 3
        ]);

        DB::table('recipes')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'name' => 'Tiramisu',
            'imagePath' => '',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id nisi non massa commodo suscipit. Praesent commodo ut sapien non mollis. Aliquam porttitor quam mollis tellus placerat semper. Ut commodo imperdiet lacus eu pharetra. Nullam tellus nisi, dignissim eget lacus quis, tincidunt efficitur neque. Sed imperdiet sit amet sapien a dapibus. Pellentesque vehicula maximus ante, nec mollis felis porttitor at. Fusce cursus luctus egestas. Aliquam faucibus est non vulputate rutrum.',
            'cookingTime' => '30 minuten',
            'visible' => true,
            'categoryId' => 3
        ]);

        DB::table('recipes')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'name' => 'Pittige Uiensoep',
            'imagePath' => '',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id nisi non massa commodo suscipit. Praesent commodo ut sapien non mollis. Aliquam porttitor quam mollis tellus placerat semper. Ut commodo imperdiet lacus eu pharetra. Nullam tellus nisi, dignissim eget lacus quis, tincidunt efficitur neque. Sed imperdiet sit amet sapien a dapibus. Pellentesque vehicula maximus ante, nec mollis felis porttitor at. Fusce cursus luctus egestas. Aliquam faucibus est non vulputate rutrum.',
            'cookingTime' => '30 minuten',
            'visible' => true,
            'categoryId' => 4
        ]);

        DB::table('recipes')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'name' => 'Paprikasoep',
            'imagePath' => '',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id nisi non massa commodo suscipit. Praesent commodo ut sapien non mollis. Aliquam porttitor quam mollis tellus placerat semper. Ut commodo imperdiet lacus eu pharetra. Nullam tellus nisi, dignissim eget lacus quis, tincidunt efficitur neque. Sed imperdiet sit amet sapien a dapibus. Pellentesque vehicula maximus ante, nec mollis felis porttitor at. Fusce cursus luctus egestas. Aliquam faucibus est non vulputate rutrum.',
            'cookingTime' => '10 minuten',
            'visible' => true,
            'categoryId' => 4
        ]);

        DB::table('recipes')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'name' => 'Caprese salade',
            'imagePath' => '',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id nisi non massa commodo suscipit. Praesent commodo ut sapien non mollis. Aliquam porttitor quam mollis tellus placerat semper. Ut commodo imperdiet lacus eu pharetra. Nullam tellus nisi, dignissim eget lacus quis, tincidunt efficitur neque. Sed imperdiet sit amet sapien a dapibus. Pellentesque vehicula maximus ante, nec mollis felis porttitor at. Fusce cursus luctus egestas. Aliquam faucibus est non vulputate rutrum.',
            'cookingTime' => '10 minuten',
            'visible' => true,
            'categoryId' => 5
        ]);

        DB::table('recipes')->insert([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'name' => 'Salsa roja',
            'imagePath' => '',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id nisi non massa commodo suscipit. Praesent commodo ut sapien non mollis. Aliquam porttitor quam mollis tellus placerat semper. Ut commodo imperdiet lacus eu pharetra. Nullam tellus nisi, dignissim eget lacus quis, tincidunt efficitur neque. Sed imperdiet sit amet sapien a dapibus. Pellentesque vehicula maximus ante, nec mollis felis porttitor at. Fusce cursus luctus egestas. Aliquam faucibus est non vulputate rutrum.',
            'cookingTime' => '10 minuten',
            'visible' => true,
            'categoryId' => 5
        ]);
    }
}
