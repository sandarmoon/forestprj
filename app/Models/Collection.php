<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Collection extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['title','user_id','description','sorting'];

    public function items($value='')
    {
        return $this->belongsToMany('App\Models\Item')->withPivot('sorting')->withTimestamps();
    }
}
