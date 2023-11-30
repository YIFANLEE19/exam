<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        
        return view('/menu')->with('menus', Menu::all());
    }

    public function edit($id)
    {
        $menu = Menu::where('id', $id)->first();
        return view('/menuUpdate', compact('menu'));
    }

    public function update()
    {
        $r = request();
        $menu=Menu::find($r->foodId);

        if($r->foodImage) {
            $image=$r->file('foodImage');     
            $image->move('images',$image->getClientOriginalName());                   
            $imageName=$image->getClientOriginalName(); 
            $menu->foodImage=$imageName;
        }

        $menu->foodName =  $r->foodName;
        $menu->description = $r->description;
        $menu->foodPrice = $r->foodPrice;
        $menu->categoryName = $r->categoryName;
        $menu->save();

        return redirect()->route('menu');
    }


}
