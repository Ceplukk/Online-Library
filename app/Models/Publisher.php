<?php

namespace App\Models;

use App\Models\Book;
use App\Models\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Publisher extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function book() {
        return $this->hasMany(Book::class, 'publisher_id');
    }
}
