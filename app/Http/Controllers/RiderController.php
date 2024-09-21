<?php

namespace App\Http\Controllers;

use App\Models\MemberOrder;
use Illuminate\Http\Request;

class RiderController extends Controller
{
    //index
    public function index(){
        $productOrder = MemberOrder::get();
        return view('Users.Rider.riderIndex')->with(['order' => $productOrder]);
    }

    //volunteer details page


    //volunteer choosing member
    public function riderMember(Request $request){
        $memberOrder = new MemberOrder();

        $memberOrder->user_id = $request->input('user_id');
        $memberOrder->admin_id = $request->input('admin_id');
        $memberOrder->member_id = $request->input('member_id');
        $memberOrder->product_id = $request->input('product_id');
        $memberOrder->customer_name = $request->input('customer_name');

        $memberOrder->delivery_address = $request->input('delivery_address');
        $memberOrder->payment_method = $request->input('payment_method');
        $memberOrder->save();

        return redirect()->route('rider#index');
    }
    public function riderDetails($id){
        $memberOrder = MemberOrder::where('id', $id)->first();
        //$mealData = Meal::FindorFail($id);
        //dd($mealData);
        return view('Users.Rider.riderDetails')->with(['memberOrder' => [$memberOrder]]);
    }
    public function deleteOrder($id){

        MemberOrder::where('id', $id)->delete(); //db data delete

        //project image folder delete
     
        return view('Users.Rider.riderIndex')->with(['orderDeleted' => "Order Placed Successfully"]);
    }
}
