<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'admin_address',
        'admin_organization',
        'admin_timeline',
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
