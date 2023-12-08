<?php

namespace App\Models;

use App\Models\Author;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    protected $guarded = [''];
    protected $with = ['author', 'publisher', 'category'];
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
}
