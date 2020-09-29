@if($feed_items->count() > 0)
{{-- the $feed_items parametr passed from controller --}}

<ul class="list-unstyled">
@foreach ($feed_items as $review)
    @include('reviews._review', ['user'=>$review->user])
@endforeach
</ul>
<div class="mt-5">
    {{ $feed_items->list() }}
</div>
@else
<p>No Reviews!</p>
@endif
