<?php

namespace Admin\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded =['id','created_at','deleted_at','updatede_at'];
    protected $hidden =['created_at','updatede_at'];
    protected $dates =['deleted_at'];

    public function subject()
    {
        return $this->belongsTo(Subject::class,'subject_id');
    }
    public function user()
    {
        // dd(123);
        return $this->belongsTo(\App\Models\User::class,'creator_user_id');
    }
    //  public function comment()
    // {
    //     // dd(123);
    //     return $this->hasMany(\App\Models\Comment::class,'blog_id')->where('parent_id', 0);
    // }
    public function keywords()
    {
        return $this->belongsToMany(Keyword::class, 'blog_keyword', 'blog_id','keyword_id');
    }

    public function comments()
    {
        // dd(123);
        return $this->morphMany(Comment::class,'commentable');
    }
    
    
    
}   
