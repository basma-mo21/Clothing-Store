<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function product()
    {
        if(Auth::id()){
            if(Auth::user()->usertype == 1){
                return view('Admin.product');
            }else{
                return redirect()->back();
            }



        }else{
            return view('auth.login');
        }
       
    }


    public function uploadproduct(Request $request)
    {
        $data= new Product;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('productimage' , $imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->quantity=$request->quantity;
        $data->save();

        return redirect()->back()->with('message' ,'product added successfully');
    }



    public function showproduct()
    {
        $data=product::paginate(3);
        return view('Admin\showproduct' , compact('data'));
    }



    public function deleteproduct($id)
    {   $data=product::find($id);
        $data->delete();
        return redirect()->back()->with('message' ,'product Deleted successfully');;

       
    }



    public function updateview($id){
        $data=product::find($id);
        return view('Admin.updateview',compact('data'));

    }


    public function updateproduct($id,Request $request){
        $data=product::find($id);

        $image=$request->file;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->file->move('productimage' , $imagename);
            $data->image=$imagename;
        }
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->quantity=$request->quantity;
        $data->save();

        return  redirect()->back()->with('message' ,'product Updated successfully');

    }

    public function showorder(){
        $order=Order::all();
        return view('Admin.orders' ,compact('order'));
    }


    public function updatestatus($id){
        $order=Order::find($id);
        $order->status='delivered';
        $order->save();
        return redirect()->back();

    }


}
