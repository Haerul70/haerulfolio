<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'experiences';

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'service_id',
        'company',
        'start_date',
        'end_date',
        'description',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
