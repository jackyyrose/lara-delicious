@extends('layouts.default')
@section('title',$user->name)
@section('content')
<div class="row">
    <div class="offset-md-2 col-md-8">
        <div class="col-md-12">
            <div class="offset-md-2 col-md-8">
                <section class="user_info">
                    @include('shared._user_info', ['user'=>$user])
                </section>
                <section class="status">
                    @if ($reviews->count() > 0)
                    <ul class="list-unstyled">
                        @foreach ($reviews as $review)
                        @include('reviews._review')
                        @endforeach

                    </ul>
                    <div class="mt-5">
                        {{ $reviews->links() }}
                    </div>
                    @else
                    <p>No reviews！</p>
                    @endif
                </section>
            </div>
        </div>
    </div>
</div>
@stop
