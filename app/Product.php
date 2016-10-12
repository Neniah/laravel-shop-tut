<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends BaseModel
{
    //
    protected $primaryKey = 'id';
    protected $table = 'products';
    protected $fillable = ['name', 'title', 'description', 'category_id', 'brand_id', 'created_at_ip', 'updated_at_ip'];

}
