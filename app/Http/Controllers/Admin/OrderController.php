<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\orders;
use App\Models\Menu;

class OrderController extends Controller
{
    Public function orderlist()
    {
        $orders = orders::all();
        $menu= Menu::get(['name','id']);
        return view('admin.admintabs.orders.orderslist', compact('orders'));
    }
    Public function create()
    {
        return view('admin.admintabs.orders.createorders');
    }
   
   
    Public function storeorder(Request $request)
    {   
        //  dd($request->all());
         $orders= new orders();
         $orders->user_id=Auth::user()->id;
         $orders->total_amount=$request->total_amount;
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

   
    



