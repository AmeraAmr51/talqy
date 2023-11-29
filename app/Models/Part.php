<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
        // ,'teacher_id'
        ,'book_id',
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
        return $this->hasMany(Chapter::class,'part_id');
    }
    public function books()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }
    public function materials()
    {
        return $this->hasMany(Material::class,'part_id');
    }

}
