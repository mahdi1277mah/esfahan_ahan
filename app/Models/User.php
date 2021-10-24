<?php

namespace App\Models;

use Carbon\Carbon;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','img','is_superuser','is_staff','username','birth_year','birth_month','birth_day',
        'title_job','about_us','website','telegram_link','linkedin_link','twitter_link','facebook_link','instagram_link','viptime','vendor','wallet'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isSuperuser()
    {
        return $this->is_superuser;
    }
    public function isStaffuser()
    {
        return $this->is_staff;
    }
    public function vendor()
    {
        return $this->vendor;
    }

    public function isActive()
    {
        return $this->viptime > Carbon::now() ? true : false;
    }
    public function setPasswordAttribute($value)
    {
        $this->attributes['password']=bcrypt($value);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function hasRole($roles)
    {
        return !! $roles->intersect($this->roles)->all();
    }

    public function hasPermission($permission)
    {
        return $this->permissions->contains('name',$permission->name) || $this->hasRole($permission->roles);
    }

    public function course()
    {
        return $this->belongsToMany(Course::class);
    }
    public function episode()
    {
        return $this->hasMany(Episode::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function checkLearning($course)
    {
        return !! Learning::where('user_id',$this->id)->where('course_id',$course->id)->first();
    }
    public function favorites()
    {
        return $this->belongsToMany(Course::class,'favorites','user_id','course_id')->withTimestamps();
    }
    public function ratings()
    {
        return $this->belongsToMany(Course::class,'ratings','user_id','course_id')->withTimestamps();
    }
    public function checkFavorite($course)
    {
        return !! Favorite::where('user_id',$this->id)->where('course_id',$course->id)->first();
    }
    public function checkRating($course)
    {
        return !! Rating::where('user_id',$this->id)->where('course_id',$course->id)->first();
    }
    public function learnings()
    {
        return $this->belongsToMany(Course::class,'learnings','user_id','course_id')->withTimestamps();
    }
    public function teachers()
    {
        return $this->belongsToMany(Course::class,'teachers','user_id','course_id')->withTimestamps();
    }
    public function review_teachers()
    {
        return $this->belongsToMany(Course::class,'review_teaches','user_id','course_id')->withTimestamps();
    }



}
