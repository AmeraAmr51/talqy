<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Teacher extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guard = 'teacher';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone','nationality','profit_percentage','experience','password','note',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','created_at','updated_at',
    ];

    public function levels()
    {
        return $this->belongsToMany(Level::class);
    }

    public function grades()
    {
        return $this->belongsToMany(Grade::class,);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function books()
    {
        return $this->hasMany(Book::class,'teacher_id');
    }
    public function parts()
    {
        return $this->hasMany(Part::class,'teacher_id');
    }
    public function chapters()
    {
        return $this->hasMany(Chapter::class,'teacher_id');
    }
    public function lessons()
    {
        return $this->hasMany(Lesson::class,'teacher_id');
    }

}
