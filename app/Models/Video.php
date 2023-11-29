<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','status_id','lesson_id','date_of_publication','url'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function lesson()
     {
    return $this->belongsTo(Lesson::class, 'lesson_id');
     }
    public function status()
     {
    return $this->belongsTo(Status::class, 'status_id');
     }



}