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

        // add validation before saving record in database
        
        //  dd($request->all());
        $menu = new Menu();
        $menu -> name= $request-> name;
        $menu -> category= $request-> category;
        $menu -> quantity= $request-> quantity;
        $menu -> price= $request-> price;
        $menu->save();
    return redirect()->route('admin.dashboard');
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::find($id);
        $menu -> name= $request-> name;
        $menu -> category= $request-> category;
        $menu -> quantity= $request-> quantity;
        $menu -> price= $request-> price;
        $menu->save();
    return redirect()->to('admin/menu');
}

    Public function destroy($id)
    {
        Menu::destroy($id);
        return redirect()->to('admin/menu');
    }

}
