<?php

namespace Database\Seeders;

use App\Core\Restaurant\RestaurantModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Kagurazaka Ishikawa Sushi Haru Nakanoshima Sushi',
                'desc' => 'Enjoy the highest quality Omakase with unlimited sake at a reasonable price.',
                'image' => 'https://fastly.picsum.photos/id/56/400/300.jpg?hmac=yZbGLqJ27Ni6cg_pw2bD8fx7cka9RhiAN_2ht5KQntQ',
                'rating' => 4.2,
                'rating_count' => 133,
                'isFavorite' => false
            ],
            [
                'name' => 'Kagurazaka Ishikawa Sushi Haru Nakanoshima Sushi',
                'desc' => 'Enjoy the highest quality Omakase with unlimited sake at a reasonable price.',
                'image' => 'https://fastly.picsum.photos/id/557/400/300.jpg?hmac=DdhZzMtqhqVPgJCCs_apofp30QFn87JyUIjsd9mzSJc',
                'rating' => 4.2,
                'rating_count' => 133,
                'isFavorite' => false
            ],
            [
                'name' => 'Kagurazaka Ishikawa Sushi Haru Nakanoshima Sushi',
                'desc' => 'Enjoy the highest quality Omakase with unlimited sake at a reasonable price.',
                'image' => 'https://fastly.picsum.photos/id/737/400/300.jpg?hmac=ZRpsmyRkpOcXPwH5bptNaZddOKUsa9Y71IYmfvNZbY4',
                'rating' => 4.2,
                'rating_count' => 133,
                'isFavorite' => false
            ],
            [
                'name' => 'Kagurazaka Ishikawa Sushi Haru Nakanoshima Sushi',
                'desc' => 'Enjoy the highest quality Omakase with unlimited sake at a reasonable price.',
                'image' => 'https://fastly.picsum.photos/id/765/400/300.jpg?hmac=fVYwJWGkpcDm6w5GZyPC5phkAWqjHB_SlPyOqCE3gSs',
                'rating' => 4.2,
                'rating_count' => 133,
                'isFavorite' => false
            ],
            [
                'name' => 'Kagurazaka Ishikawa Sushi Haru Nakanoshima Sushi',
                'desc' => 'Enjoy the highest quality Omakase with unlimited sake at a reasonable price.',
                'image' => 'https://fastly.picsum.photos/id/40/400/300.jpg?hmac=8AGnAXOIIdCQBjrJbgkbN_3MwNkcN_UFm1dfEvy_p9g',
                'rating' => 4.2,
                'rating_count' => 133,
                'isFavorite' => false
            ],
            [
                'name' => 'Kagurazaka Ishikawa Sushi Haru Nakanoshima Sushi',
                'desc' => 'Enjoy the highest quality Omakase with unlimited sake at a reasonable price.',
                'image' => 'https://fastly.picsum.photos/id/369/400/300.jpg?hmac=3LUN-xHGRhWFnodEFbGp5jMfsAs0pMgnsN7hOFuw4DU',
                'rating' => 4.2,
                'rating_count' => 133,
                'isFavorite' => false
            ],
            [
                'name' => 'Kagurazaka Ishikawa Sushi Haru Nakanoshima Sushi',
                'desc' => 'Enjoy the highest quality Omakase with unlimited sake at a reasonable price.',
                'image' => 'https://fastly.picsum.photos/id/239/400/300.jpg?hmac=Y0lXdob8aGElbBKHxqWcehLuMZzHsPRXt_mjpTbIklM',
                'rating' => 4.2,
                'rating_count' => 133,
                'isFavorite' => false
            ],
            [
                'name' => 'Kagurazaka Ishikawa Sushi Haru Nakanoshima Sushi',
                'desc' => 'Enjoy the highest quality Omakase with unlimited sake at a reasonable price.',
                'image' => 'https://fastly.picsum.photos/id/527/400/300.jpg?hmac=QjbwkrNaHw3YiynFwk1Q9ISB0hujpiNv1TjNi37mV3c',
                'rating' => 4.2,
                'rating_count' => 133,
                'isFavorite' => false
            ],
            [
                'name' => 'Kagurazaka Ishikawa Sushi Haru Nakanoshima Sushi',
                'desc' => 'Enjoy the highest quality Omakase with unlimited sake at a reasonable price.',
                'image' => 'https://fastly.picsum.photos/id/904/400/300.jpg?hmac=5qufktXceAkz_2BZnTBFsCeBnbo3jhxtDLISECwzNhM',
                'rating' => 4.2,
                'rating_count' => 133,
                'isFavorite' => false
            ],
        ];

        foreach ($data as $item) {
            RestaurantModel::factory()->create($item);
        }
    }
}
