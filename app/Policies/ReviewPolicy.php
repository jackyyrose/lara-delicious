<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Review;

use Illuminate\Auth\Access\HandlesAuthorization;

class ReviewPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // the 2nd parameter is passed from view
    public  function destroy(User $currentUser, Review $review){
        return $currentUser->id === $review->user_id;
    }
}
