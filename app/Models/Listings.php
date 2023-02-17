<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Listings extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'title',
    //     'tags',
    //     'company',
    //     'location',
    //     'price',
    //     'description'
    // ];

    public function scopeFilter($query, array $filters) {

        if($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tags') . '%');
        }

        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%');
        }
    }


    

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
     
}