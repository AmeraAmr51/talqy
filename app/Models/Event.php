<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
        ,'total_time'
        ,'lectures'
        ,'img'
        ,'start'
        ,'end'
        ,'description'
        ,'what_you_learn'
        ,'requirments'
        ,'who_package_for'
        ,'enroll_message'
        ,'whatsapp'
        ,'google_meet'
        ,'zoom'
        ,'certification'
        ,'certification_title'
        ,'price'
        ,'discount'
        ,'price_after_discount'
        ,'book_id'
        ,'part_id'
        ,'chapter_id'
        ,'lesson_id'
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
    public function eventDays()
    {
        return $this->hasMany(EventDay::class,'event_id');
    }
}
