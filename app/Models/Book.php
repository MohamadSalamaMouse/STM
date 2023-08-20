<?php

namespace App\Models;

use App\Models\User;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'user_id',
    ];

    protected $with = ['author', 'category', 'students'];
    public function author(){
        return $this->belongsTo(Author::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function students()
    {
        return $this->belongsTo(User::class);
    }
    

}
