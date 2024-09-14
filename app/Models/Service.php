<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title',
        'description',
    ];

    protected $table = 'services';

    public function experiences()
    {
        return $this->hasMany(Experience::class, 'service__id');
    }

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class, 'service_id');
    }
}
