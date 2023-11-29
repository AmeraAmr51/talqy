<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
        // ,'teacher_id'
        ,'chapter_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function teachers()
    {
    return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    public function chapters()
    {
        return $this->belongsTo(Chapter::class, 'chapter_id');
    }
    public function materials()
    {
        return $this->hasMany(Material::class,'lesson_id');
    }

}
