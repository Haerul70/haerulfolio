<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'service_id',
        'title',
        'description',
        'project_url',
        'image_url',
    ];

    protected $table = 'portfolios';

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'id_portfolio');
    }
}
