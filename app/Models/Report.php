<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'reportable_id', 'reportable_type'];

    public function reportable(){
        return $this->morphTo();
    }

    public function rules(){
        return $this->belongsToMany(Report::class);
    }
}
