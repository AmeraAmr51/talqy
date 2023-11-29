<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InSiteCourseDay extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id'
       ,'day'
       ,'from'
       ,'to'
   ];

   /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
   protected $hidden = [
       'created_at', 'updated_at',
   ];

   public function courses()
   {
   return $this->belongsTo(InSiteCourse::class, 'course_id');
   }
}
