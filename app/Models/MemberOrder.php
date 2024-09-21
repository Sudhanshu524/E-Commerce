<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'member_id',
        'product_id',
        'admin_id',
        'delivery_address',
        'customer_name',
        'payment_method',
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function members(){
        return $this->belongsTo(Member::class, 'member_id', 'id');
    }

    public function admins(){
        return $this->belongsTo(Admin::class, 'admin_id', 'id');
    }

    public function products(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
