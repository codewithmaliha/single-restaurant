<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    
    public function menu()
    {
        $menu= Menu::all();
        return view('admin.admintabs.menu',compact('menu'));


    }
    public function edit($id)
    {
        $menu= Menu::find($id);
        return view('admin.admintabs.editmenu', compact('menu'));
        

    }
    public function showmenu()
    {
    
        return view('admin.admintabs.addmenu');

    }
    
    
    
    public function storemenu(Request $request)
    { 
        //  dd($request->all());
        $menu = new Menu();
        $menu -> name= $request-> name;
        $menu -> category= $request-> category;
        $menu -> quantity= $request-> quantity;
        $menu -> price= $request-> price;
        $menu->save();
    return redirect()->route('admin.dashboard');
    }
}
