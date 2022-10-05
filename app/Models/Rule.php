<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;
    protected $fillable = ['rule_name', 'description'];

    public function reports(){
        return $this->belongsToMany(Report::class);
    }
}
