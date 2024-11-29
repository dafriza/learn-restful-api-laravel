<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['created_at'];

    public function image(): Attribute
    {
        return Attribute::make(get: fn($value) => url('/storage/post/' . $value));
    }
}
