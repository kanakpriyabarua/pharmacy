<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',        
        'company_name',
        'email',
        'mobile',
        'address'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function purchases(){
        return $this->hasMany(Purchase::class);
    }
}
