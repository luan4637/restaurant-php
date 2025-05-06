<?php
namespace App\Http\Controllers;

use App\Core\Restaurant\RestaurantModel;
use App\Core\Restaurant\RestaurantRepositoryInterface;
use App\Http\Requests\Restaurant\SaveRequest as RestaurantSaveRequest;
use App\Infrastructure\Persistence\RequestFilter\RequestFilterInterface;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * @var RestaurantRepositoryInterface $restaurantRepository
     */
    private RestaurantRepositoryInterface $restaurantRepository;

    public function __construct(RestaurantRepositoryInterface $restaurantRepository)
    {
        $this->restaurantRepository = $restaurantRepository;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        /** @var RestaurantModel[] $restaurants */
        $restaurants = $this->restaurantRepository->getAll();

        return $this->responseSuccess($restaurants);
    }

    /**
     * @param RestaurantSaveRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(RestaurantSaveRequest $request, int $id)
    {
        /** @var RestaurantModel $restaurant */
        $restaurant = new RestaurantModel();
        if ($id) {
            $restaurant = $this->restaurantRepository->find($id);
            if (!$restaurant) {
                return $this->responseFail('Item does not found');
            }
        }

        $restaurant->fill($request->validated());

        if ($restaurant->save()) {
            return $this->responseSuccess($restaurant);
        }

        return $this->responseFail('Something went wrong!');
    }
}