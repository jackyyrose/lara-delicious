<li class="media mt-4 mb-4">
    <a href="{{ route('users.show', $user->id) }}">
        <img src= "{{ $user->gravatar() }}" alt="{{ $user->name}}" class="mr-3 gravatar" />
    </a>
    <div class="mdeia-body">
        <h5 class="mt-0 mb-1">{{ $user->name}} <small> / {{$review->created_at->diffForHumans() }}</small></h5>
        {{ $review->content}}
    </div>
    @can('destroy', $review)
        <form action="{{ route('reviews.destroy', $review->id)}}"
            onsubmit="return confirm('Are you sure to delete this one?');"
            method="post">
            @csrf
            {{method_field('DELETE')}}
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
    @endcan
</li>
