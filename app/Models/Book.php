<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use softDeletes;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'cover',
        'price',
        'author_id',
        'category_id',
        'borrow',
    ];
    public function author(){
        return $this->belongsTo(Author::class);
    }

}
