<?php
namespace App\Core\Restaurant;

use App\Infrastructure\Persistence\Repositories\BaseRepository;

class RestaurantRepository extends BaseRepository implements RestaurantRepositoryInterface
{
    /**
     * @return string
     */
    public function getModel()
    {
        return RestaurantModel::class;
    }
}