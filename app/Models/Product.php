<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'admin_id',
        'product_name',
        'product_type',
        'product_image',
        'product_price',
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function admins(){
        return $this->belongsTo(Admin::class, 'admin_id', 'id');
    }
}
