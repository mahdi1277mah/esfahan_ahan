<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'user_id', 'course_id', 'e_name', 'type', 'slug', 'body', 'price', 'discount', 'tags', 'images', 'videos', 'time', 'view_count', 'comment_count'];

    protected $casts = [
        'images' => 'array'
    ];

    public function scopeSearch($query, $keywords)
    {
        $query->where('title', 'LIKE', '%' . $keywords . '%')->orWhere('body', 'LIKE', '%' . $keywords . '%');
        return $query;
    }

    public function scopeFilter($query)
    {
        $category = request('category');
        if (isset($category) && trim($category) != '' && $category != 'all') {
            $query->whereHas('categories', function ($query) use ($category) {
                $query->whereId($category);
            });
        }
        $type = request('type');
        if (isset($type) && trim($type) != '') {
            if (in_array($type, ['vip', 'cash', 'free'])) {
                $query->whereType($type);
            }
        }
        return $query;
    }

    public function path()
    {
        return "/series/$this->slug";
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function episode()
    {
        return $this->hasMany(Episode::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'course');
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function reviews()
    {
        return $this->morphMany(Review::class, 'course');
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function favorites()
    {
        return $this->belongsToMany(User::class, 'favorites', 'course_id', 'user_id')->withTimestamps();
    }

    public function rates()
    {
        return $this->hasMany(Rating::class, 'course');
    }

    public function learnings()
    {
        return $this->belongsToMany(User::class, 'learnings', 'course_id', 'user_id')->withTimestamps();
    }

    public function teaches()
    {
        return $this->belongsToMany(User::class, 'courses', 'user_id', 'course_id')->withTimestamps();
    }

    public function teachers()
    {
        return $this->belongsTo(User::class, 'user_id', 'course_id');
    }


}

