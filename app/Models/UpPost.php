<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpPost extends Model
{
    protected $guarded = [];
    public function Upload_Comments(){
        
        return $this->morphMany('App\Models\UploadComment', 'commentable');
    } 
}
