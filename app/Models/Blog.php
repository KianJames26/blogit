<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_title',
        'blog_description',
        'blog_image',
        'user_id'
    ];
    public function scopeSearch($query, $search){
        return $query->where('blog_title', 'like', '%' . $search . '%')
                    ->orwhere('blog_description', 'like', '%' . $search . '%');
    }
    public function author(): BelongsTo{
        return $this->belongsTo(User::class, 'user_id');
    }
}
