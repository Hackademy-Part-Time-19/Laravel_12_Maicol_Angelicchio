<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'category', 'description', 'category_id'];

    public function category(): BelogsTo
    {
        return $this->belongsTo(category::class);
    }

}
