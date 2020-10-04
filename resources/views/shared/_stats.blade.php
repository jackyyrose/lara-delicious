<a href="#">
    <strong id="following" class="stat">
        {{ count($user->followings)}}
    </strong>
    Following
</a>

<a href="#">
    <strong id="followers" class="stat">
        {{ count($user->followers)}}
    </strong>
    Follower
</a>

<a href="#">
    <strong id="reviews" class="stat">
        {{ $user->reviews()->count()}}
    </strong>
    Reviews
</a>
