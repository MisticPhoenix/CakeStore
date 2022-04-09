<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "products";
    protected $guarded = false;

    public function categories(){
        return $this->BelongsTo(Category::class, 'category_id', 'id');
    }
}
