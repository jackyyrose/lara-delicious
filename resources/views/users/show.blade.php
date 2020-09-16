@extends('layouts.default')
@section('title',$user->name)
@section('content')
<div class="row">
    <section class="user_info">
        @include('shared._user_info', ['user'=>$user])
    </section>
</div>
@stop
