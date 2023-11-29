<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    protected $fillable = [
        'title'
        // ,'teacher_id'
        ,'part_id',
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


       public function lessons()
    {
        return $this->hasMany(Lesson::class,'chapter_id');
    }
    public function parts()
    {
        return $this->belongsTo(Part::class, 'part_id');
    }
    public function materials()
    {
        return $this->hasMany(Material::class,'chapter_id');
    }

}
