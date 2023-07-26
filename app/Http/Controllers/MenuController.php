<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        return view('menu', [
            "title" => "Menu Foods And Beverages",
            "menus" => Menu::all()
        ]);
    }

    public function show(Menu $menu){
        return view('menu-detail', [
            "title" => $menu->name,
            "menu" => $menu
        ]);
    }
}