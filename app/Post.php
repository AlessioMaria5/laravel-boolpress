<?php

namespace App;

use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Console\Concerns\InteractsWithIO;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements Viewable
{

    use InteractsWithViews;

    protected $fillable = ['title','slug','content','category_id'];

    

    public function category(){
        
        return $this->belongsTo('App\Category');
    }

    public function tags(){

        return $this->belongsToMany('App\Tag');
    }
}
