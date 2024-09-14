<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'skills';

    protected $fillable = [
        'skills_type_id',
        'title',
    ];

    public function skills_type()
    {
        return $this->belongsTo(SkillsType::class);
    }
}
