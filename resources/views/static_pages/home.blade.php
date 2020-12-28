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
        <section class="stats mt-2">
            @include('shared._stats',['user'=>Auth::user()])
        </section>
    </aside>
</div>
@else

@endif
<!-- Suggested Display board -->
<div id="carousel_demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#carousel_demo" data-slide-to="0" class="active"></li>
      <li data-target="#carousel_demo" data-slide-to="1"></li>
      <li data-target="#carousel_demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://just-eat-prod-sg-res.cloudinary.com/image/upload/c_fill,d_nz:cuisines:chinese-0.jpg,f_auto,q_auto,w_500/v1/nz/restaurants/10000450.jpg" alt="sample 1">
      </div>
      <div class="carousel-item">
        <img src="https://www.thedenizen.co.nz/wp-content/uploads/2020/09/yum-cha-810x480.jpg" alt="sample 2">
      </div>
      <div class="carousel-item">
        <img src="https://media.istockphoto.com/photos/asian-oranage-chicken-with-green-onions-picture-id483120255?k=6&m=483120255&s=612x612&w=0&h=H9m0_Ky_grAGA60D947n5TCVSCk_82sNPDTYJSYy6Fk=" alt="sample 3">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#carousel_demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#carousel_demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>

</div>

<div id="popular_demo">
    <div class="col-md-12">
        <h2 class="mb-4 text-center">All Menus</h2>
        <div class="list-group list-group-flush">
            @foreach(array(1,2,3,4,5,6,7,8) as $a)
            @include('menus._menu')

            @endforeach
        </div>
        <div class="mt-3">

        </div>
    </div>
</div>
@stop
