<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategory extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=['name','category_id'];

    public function category($value='')
    {
    	return $this->belongsTo('App\Models\Category');
    }
}
