<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\orders;
use App\Models\Menu;
use App\Models\User;

class OrderController extends Controller
{
    
    
    Public function orderlist()
    {
        $orders = orders::all();
        
        foreach($orders as $item){
            // fetch User name
            $user_name = User::where('id',$item->user_id)->first('name');
            $item->user_name = $user_name->name;
            
            // fetch Menu Name
            $menu_name = Menu::where('id',$item->menu_item_id)->first('name');
            $item->menu_name = $menu_name->name;
        }
        
        return view('admin.admintabs.orders.orderslist', get_defined_vars());
    }
    Public function create()
    {
        $menus= Menu::where('status',1)->get(['name','id']); /* for dropdown inside create order */
        return view('admin.admintabs.orders.createorders', get_defined_vars());
    }

    
    Public function storeorder(Request $request)
    {
        
        $menu_id = $request->menu_id;
        $Menu_price = Menu::where('id',$menu_id)->first('price');
        $order_amount = $Menu_price->price * $request->qty;
        
        $orders= new orders();
        $orders->user_id = Auth::user()->id;
        $orders->menu_item_id = $menu_id;
        $orders->quantity  = $request->qty;
        $orders->price = $order_amount;
        $orders->save();
        
        return redirect()->to('admin/orders-list');
    }
    
    Public function editorder($id)
    {
        //  dd($request->all());
        $orders= orders::find($id);
        return view('admin.admintabs.orders.editorders', compact('orders'));
    }


     Public function updateorder(Request $request, $id)
     {
         //  dd($request->all());
         $orders= orders::find($id);
            $orders->menu_items=$request->menu_items;
            $orders->total_amount=$request->total_amount;
            $orders->save();
            
            return redirect()->to('admin/orders-list');
        }
        Public function destroy($id)
        {
            orders::destroy($id);
            return redirect()->to('admin/orders-list');

        }
        
    }
    
    




