<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategoryLang extends Model
{
    use HasFactory;
    protected $fillable = ['category_id','name','lang'];
}
