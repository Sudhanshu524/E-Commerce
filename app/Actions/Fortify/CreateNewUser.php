<?php

namespace App\Actions\Fortify;

use App\Models\Admin;
use App\Models\Donor;
use App\Models\Member;
use App\Models\Partner;
use App\Models\Rider;
use App\Models\User;
use App\Models\Volunteer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    // /**
    //  * Validate and create a newly registered user.
    //  *
    //  * @param  array  $input
    //  * @return \App\Models\User
    //  */
    public function create(array $input)
    {

        $user = new User();
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->phone = $input['phone'];
        $user->address = $input['address'];
        $user->gender = $input['gender'];
        $user->role = $input['role'];
        $user->password = Hash::make($input['password']);
        $user->save();

        if($input['role'] == 'member'){
            $member = new Member();
            $member->member_name = $input['member_name'];
            $member->member_phone = $input['member_phone'];
            $member->member_address = $input['member_address'];
            $member->user_id = $user->id;
            $member->save();
        }

        if($input['role'] == 'admin'){
            $admin = new Admin();
            $admin->admin_address = $input['admin_address'];
            $admin->admin_organization = $input['admin_organization'];
            $admin->admin_timeline = $input['admin_timeline'];
            $admin->user_id = $user->id;
            $admin->save();
        }

        if($input['role'] == 'donor'){
            $donor = new Donor();
            $donor->donation_schedule = $input['donation_schedule'];
            $donor->donation_type = $input['donation_type'];
            $donor->user_id = $user->id;
            $donor->save();
        }

        if($input['role'] == 'rider'){
            $rider = new Rider();
            $rider->rider_name = $input['rider_name']; 
            $rider->rider_time = $input['rider_time'];
            $rider->rider_available = $input['rider_available'];
            $rider->user_id = $user->id;
            $rider->save();
        }
        return $user;
    }
}
