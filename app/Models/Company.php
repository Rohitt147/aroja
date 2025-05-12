<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'user_id',
        'code',
        'address_1',
        'address_2',
        'city',
        'state',
        'mobile',
        'email',
        'website',
        'gstin',
        'pan',
        'cin',
        'logo',
        'toggle',
        'admin_id',
        'admin_user',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
