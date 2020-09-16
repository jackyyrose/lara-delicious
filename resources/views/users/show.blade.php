@extends('layouts.default')
@section('tile',$user->name)
@section('çontent')
<div class="row">
    <section class="user_info">
        @include('shared._user_info',['user'=>$user])
    </section>
</div>
@stop
