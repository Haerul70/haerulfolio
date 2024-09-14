<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'contact';

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'user_id',
        'visitor_name',
        'visitor_email',
        'message',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
