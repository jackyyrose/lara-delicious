<?php
// namespace database\seeds;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Review;


class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user_ids = [1,2,3];
        $faker = app(Faker\Generator::class);
        $reviews = Review::factory()->times(100)->make()->each(function($review) use($faker, $user_ids){
            $review->user_id = $faker->randomElement($user_ids);
        });
        Review::insert($reviews->toArray());
    }
}
