<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;

class Order extends Model
{
    use HasFactory;
    protected $casts = ['features' => 'array'];


    // relationship - an order belongs to user.
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category', 'category');
    }
}
