<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use App\Models\Member;
use App\Models\MemberOrder;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        //
        $productOrder = Product::get();
        return view('Users.Member.memberIndex')->with(['order' => $productOrder]);
    }

    public function memberDetails($id){
        $productOrder = Product::where('id', $id)->first();
        //$mealData = Meal::FindorFail($id);
        //dd($mealData);
        return view('Users.Member.memberDetails')->with(['productOrder' => [$productOrder]]);
    }
    public function addOrder(){
        $admin_data = Admin::get();
        $member_data = Member::get();
        $product_data = Product::get();
        $user_data = User::get();
        return view('Users.Member.addOrder')->with(['adminData' => $admin_data, 'memberData' => $member_data,'productData' => $product_data, 'userData' => $user_data]);
    }

    public function createOrder(Request $request)
    {
       $validator = Validator::make($request->all(), [
            'delivery_address' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $order = new MemberOrder();

        $order->delivery_address = $request->input('delivery_address');
        $order->customer_name = $request->input('customer_name');
        $order->admin_id = $request->input('admin');
        $order->user_id = $request->input('user');
        $order->member_id = $request->input('member');
        $order->product_id = $request->input('product');
        $order->save();
        return view('Users.Member.ThankYou')->with(['Order Placed', 'Order Placed Sucessfully']);
    }
}
