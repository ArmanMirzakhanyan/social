<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'city',
        'country',
        'image',
        'cover_image',
        'user_id',
        'gender',
        'about',
        'birthdate',
    ];

    public static function updateOrCreate(array $array, array $array1)
    {
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
