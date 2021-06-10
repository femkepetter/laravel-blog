<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //protected $fillable = ['title', 'excerpt', 'body', 'category_id', 'slug'];
    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'slug';
        //return parent::getRouteKeyName(); //Change the autogenerated sub
    }

    public function category()
    {
        //hasOne, hasMany, belongsTo, belongsToMany
        //Eloquent relationship:
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
