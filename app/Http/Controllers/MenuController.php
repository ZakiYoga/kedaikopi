<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){   
        
        $title = '';
        $userRole = auth()->user()->role;


        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in Category '.$category->name_category;
        }
        return view('menu', [
            'userRole' => $userRole,
            "title" => "All Menu" . $title,
            "active" => 'menu',
            "menus" => Menu::with(['category'])->filter(request(['search', 'category']))->paginate(12)->appends(request(['search', 'category']))
        ]);
    }

    public function show(Menu $menu){
        $userRole = auth()->user()->role;

        return view('menu_detail', [
            'userRole' => $userRole,
            "title" => $menu->name,
            "active" => 'menu',
            "menu" => $menu
        ]);
    }
}