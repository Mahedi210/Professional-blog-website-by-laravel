<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    protected $fillable = [
        'name', 'site_logo', 'about_site','facebook','twitter','inst','reddite','email','copy_right','address','phone_number'
    ];
}
