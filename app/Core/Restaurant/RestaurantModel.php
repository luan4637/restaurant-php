<?php
namespace App\Core\Restaurant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantModel extends Model
{
    use HasFactory;

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';
    const DELETED_AT = 'deletedAt';

    protected $table = 'restaurant';

    protected $fillable = [
        'isFavorite'
    ];

    /**
     * @return array
     */
    protected function casts(): array
    {
        return [
            'isFavorite' => 'boolean',
        ];
    }
}