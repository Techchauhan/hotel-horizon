<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_name', 
        'hotel_name', 
        'owner_name', 
        'email', 
        'password', 
        'contact_number', 
        'address',
    ];

    protected $hidden = [
        'password',
    ];

    // Ensure password is always hashed when setting
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}