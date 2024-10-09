<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = [
        'category_name',
        'category_slug',
        'parent_id',
        'seo_title',
        'seo_meta_description'
    ];

    public function subCategories()
{
    return $this->hasMany(ProductCategory::class, 'parent_id', 'id');
}

}
