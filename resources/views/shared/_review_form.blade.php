<form action="{{ route('reviews.store') }}" method="post">
    @include('shared._errors')
    @csrf
    <textarea class="form-control" rows="3" placeholder="leave some comments" name="content">
    {{ old('content') }}
    </textarea>

    <div class="text-right">
        <button type="submit" class="btn btn-primary mt-3">Publish</button>
    </div>
</form>
