<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'video';
    protected $fillable = ['video_title', 'video_desc', 'video_src'];
    // public $timestamps = false; // Menonaktifkan timestamps

}