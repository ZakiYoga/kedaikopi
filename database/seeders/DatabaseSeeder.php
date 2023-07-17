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
            'description' => 'Burger ayam panggang dengan keju, selada, tomat, dan saus mayo.',
            'type_menu' => 'Food',
            'price' => 24000,
            'ratting' => 'Sangat Memuaskan',
            'slug'=> 'detail'
        ]);
    }
}