<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'previewText', 'previewImg', 'colorTheme', 'text', 'footer'];
    use HasFactory;

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function reports(){
        return $this->morphMany(Report::class, 'reportable');
    }
}
