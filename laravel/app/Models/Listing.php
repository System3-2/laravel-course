<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;
    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like' . '%', request('search') . '%')
                ->orWhere('title', 'like', '%' . request('search') . '%')
                // TAGS
                ->orWhere('tags', 'like' . '%', request('search') . '%');
        };
    }
}
