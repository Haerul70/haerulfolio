<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'user_id',
        'bio',
        'degree',
        'phone',
        'address',
        'city',
        'country',
        'birthday',
        'email',
        'profile_picture',
    ];

    protected $table = 'about';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
