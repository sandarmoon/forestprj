<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=['name','zipfile','thumbnail','previews','subcategory_id','author_id','genre_id','version','demoUrl','responsive','tag','status','price','price_type','message'];

    public function subcategory()
    {
      return $this->belongsTo('App\Models\Subcategory');
    }

    public function author()
    {
      return $this->belongsTo('App\Models\Author');
    }

    public function genre()
    {
      return $this->belongsTo('App\Models\Genre');
    }
}
