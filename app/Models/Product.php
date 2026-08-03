<?php
// app/Models/Product.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'sku',
        'name',
        'price',
        'qty',
        'description',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
