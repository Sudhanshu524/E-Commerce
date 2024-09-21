<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VolunteerMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'member_id',
        'partner_id',
        'volunteer_id',
        'member_name',
        'member_address',
        'meal_name',
        'meal_type',
        'partner_organization',
        'partner_address',
        'volunteer_name',
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function members(){
        return $this->belongsTo(Member::class, 'member_id', 'id');
    }

    public function partners(){
        return $this->belongsTo(Partner::class, 'partner_id', 'id');
    }

    public function volunteers(){
        return $this->belongsTo(Volunteer::class, 'volunteer_id', 'id');
    }
}
