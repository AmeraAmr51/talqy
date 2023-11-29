<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
        // ,'teacher_id',
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

     public function parts()
    {
        return $this->hasMany(Part::class,'book_id');
    }

    public function materials()
    {
        return $this->hasMany(Material::class,'book_id');
    }


}
