<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = [
        'title', 'slug', 'image','description','category_id','user_id',
    ];

    public function category(){

       return $this->belongsTo('App\category');
    }

    public function User(){
        return $this->belongsTo('App\User');
    }


}
