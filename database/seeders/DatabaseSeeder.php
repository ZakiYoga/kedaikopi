<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Menu;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Zaki Satria Prayoga',
            'email' => 'zaki.satriapr@gmail.com',
            'password' => Hash::make('admin')
        ]);

        Category::create([
            'name_category' => 'Appetizers',
            'slug' => 'Appetizers'
        ]);

        Category::create([
            'name_category' => 'Main Courses',
            'slug' => 'Main Courses'
        ]);

        Category::create([
            'name_category' => 'Beverages',
            'slug' => 'Beverages'
        ]);

        Menu::create([
            'name' => 'Grilled Chicken Burger',
            'category_id' => 1,
            'image' => 'storage\menu-image\burger-with-mayonnaise-sauce-it.jpg',
            'description' => 'Burger ayam panggang dengan keju, selada, tomat, dan saus mayo.',
            'type_menu' => 'Food',
            'price' => 24000,
            'ratting' => 'Sangat Memuaskan',
            'slug'=> 'Grilled-chicken-burger'
        ]);

        Menu::create([
            'name' => 'Roti Bakar Keju',
            'category_id' => 1,
            'image' => 'storage\menu-image\grilled-sandwich-rustic-bread-ready-eat-generated-by-ai.jpg',
            'description' => 'Roti bakar dengan taburan keju yang leleh.',
            'type_menu' => 'Food',
            'price' => 15000,
            'ratting' => 'Sangat Memuaskan',
            'slug'=> 'roti-bakar-keju'
        ]);

        Menu::create([
            'name' => 'Nasi Goreng Spesial',
            'category_id' => 2,
            'image' => 'storage\menu-image\gourmet-meal-rustic-wood-table-indoors-generated-by-ai.jpg',
            'description' => 'Nasi goreng spesial dengan telur, daging ayam, udang, dan sayuran.',
            'type_menu' => 'Food',
            'price' => 28000,
            'ratting' => 'Sangat Memuaskan',
            'slug'=> 'nasi-goreng-spesial'
        ]);

        Menu::create([
            'name' => 'Espresso',
            'category_id' => 3,
            'image' => 'storage\menu-image\burger-with-mayonnaise-sauce-it.jpg',
            'description' => 'Kopi espresso dengan aroma dan rasa yang khas.',
            'type_menu' => 'Beverage',
            'price' => 18000,
            'ratting' => 'Enak',
            'slug'=> 'espresso'
        ]);
    }
}