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
    public function scopeFillter($query, array $fillters)
    {
        $query->when($fillters['search'] ?? false, function ($query, $search) {
            return $query->where('author_id', 'like', '%' . $search . '%');
        });

        $query->when($fillters['kategori'] ?? false, function ($query, $kategori) {
            return $query->where('publisher_id', 'like', '%' . $kategori . '%');
        });
    }
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }
    public function publisher()
    {
        return $this->belongsTo(Publisher::class, 'publisher_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
