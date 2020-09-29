@extends('layouts.default')
@section('content')
@if (Auth::check())
<div class="row">
    <div class="col-md-8">
        <section class="status_form">
            @include('shared._review_form')
        </section>
        <h4>Post List </h4>
        <hr>
        @include('shared._feed')
    </div>
    <aside class="col-md-4">
        <section class="user_info">
            @include('shared._user_info',['user'=>Auth::user()])
        </section>

    </aside>
</div>
@else
<div class="jumbotron">
    <h1>Hello There</h1>

    <p>
        All start from here.
    </p>
    <p>
        Now <a class="btn btn-sm btn-success" href="{{route('signup')}}" role="button">Sign Up</a> to start a journey.
    </p>
</div>
@endif
@stop
