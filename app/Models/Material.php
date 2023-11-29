<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','file','cover','book_id','part_id','chapter_id','lesson_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function parts()
    {
    return $this->belongsTo(Part::class, 'part_id');
    }
    public function chapters()
    {
    return $this->belongsTo(Chapter::class, 'chapter_id');
    }
    public function lessons()
    {
    return $this->belongsTo(Lesson::class, 'lesson_id');
    }
    public function books()
    {
    return $this->belongsTo(Book::class, 'book_id');
    }
}
