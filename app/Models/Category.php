<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'parent_id',
        'is_active',
        'is_delete'
    ];

    /*
    |--------------------------------------------------------------------------
    | RELATIONSHIP
    |--------------------------------------------------------------------------
    */

    // Category CHA
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    // Category CON
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

public function isChildOf($parentId)
{
    $parent = $this->parent;

    while ($parent) {
        if ($parent->id == $parentId) {
            return true;
        }
        $parent = $parent->parent;
    }

    return false;
}
}