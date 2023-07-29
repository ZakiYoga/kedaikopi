<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){        
        return view('menu', [
            "title" => "Menu Foods And Beverages",
            "active" => 'menu',
            "menus" => Menu::with(['category'])->filter(request(['search', 'category']))->get(),
        ]);
    }

    public function show(Menu $menu){
        return view('menu_detail', [
            "title" => $menu->name,
            "active" => 'menu',
            "menu" => $menu
        ]);
    }
}