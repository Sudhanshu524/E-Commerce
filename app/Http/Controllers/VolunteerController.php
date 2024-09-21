<?php

namespace App\Http\Controllers;

use App\Models\MemberOrder;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    //index
    public function index(){
        $productOrder = MemberOrder::get();
        return view('Users.Volunteer.volunteerIndex')->with(['order' => $productOrder]);
    }

    //volunteer details page


    //volunteer choosing member
    public function volunteerMember(Request $request){
        $memberOrder = new MemberOrder();

        $memberOrder->user_id = $request->input('user_id');
        $memberOrder->admin_id = $request->input('admin_id');
        $memberOrder->member_id = $request->input('member_id');
        $memberOrder->product_id = $request->input('product_id');
        $memberOrder->delivery_address = $request->input('delivery_address');
        $memberOrder->payment_method = $request->input('payment_method');
        $memberOrder->save();

        return redirect()->route('volunteer#index');
    }
    public function volunteerDetails($id){
        $memberOrder = MemberOrder::where('id', $id)->first();
        //$mealData = Meal::FindorFail($id);
        //dd($mealData);
        return view('Users.Volunteer.volunteerDetails')->with(['memberOrder' => [$memberOrder]]);
    }
    public function deleteOrder($id){

        MemberOrder::where('id', $id)->delete(); //db data delete

        //project image folder delete
     
        return view('Users.Volunteer.volunteerIndex')->with(['orderDeleted' => "Order Placed Successfully"]);
    }
}
