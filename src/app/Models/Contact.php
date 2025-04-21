<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        "category_id",
        "name_first",
        "name_last",
        "tel",
        "email",
        "address",
        "building",
        "inquiry_content"
    ];
    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
}
