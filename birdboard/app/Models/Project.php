<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
//    protected $guarded = [];
    protected $fillable = ['title', 'description',];


    public function owner() {
        return $this->belongsTo(User::class);
    }
}
