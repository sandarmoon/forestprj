<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wishlist extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['user_id','item_id'];

    public function item($value='')
    {
        return $this->belongsTo('App\Models\Item');
    }
}
