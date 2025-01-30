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
            $user_nameeeee = User::where('id',$item->user_id)->first('name');
            $item->user_name = $user_nameeeee->name;
        }

        $menu= Menu::get(['name','id']); /* for dropdown inside create order */
        return view('admin.admintabs.orders.orderslist', get_defined_vars());
    }
    Public function create()
    {
        return view('admin.admintabs.orders.createorders');
    }


    Public function storeorder(Request $request)
    {

        // $menu_id = $request->menu_id;
        // $Menu_Price_obj = Menu::where('id',$menu_id)->first('price');
        // {"price":"70"}
        // $Calculate_Price = $Menu_Price_obj * $request->qty;


        //  dd($request->all());
         $orders= new orders();
         $orders->user_id=Auth::user()->id;
         $orders->total_amount=$request->total_amount;
        //  $orders->menu_id=$request->menu_id;
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
            $orders->user_id=$request->user_id;
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






