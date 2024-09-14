<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillsType extends Model
{
    use HasFactory;

    protected $table = 'skills_type';

    protected $fillable = [
        'type',
    ];

    public function skill()
    {
        return $this->hasMany(Skill::class);
    }
}
