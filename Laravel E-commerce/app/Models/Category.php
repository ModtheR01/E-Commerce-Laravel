<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes as EloquentSoftDeletes;
class Category extends Model
{
    use HasFactory, EloquentSoftDeletes ;
    protected $fillable =[
        'title',
        'description',
        'create_user_id',
    ];
    public function create_user()
    {
        return $this->belongsTo(User::class, 'create_user_id');
    }

    public function updated_user()
    {
        return $this->belongsTo(User::class, 'update_user_id');
    }

    public function subCategories(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(SubCategory::class);
    }

    public function products(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Product::class);
    }
}
