@extends('layouts.app')

@section('content')

<div class="container">

    <img class="img-fluid" src="{{$comic->thumb}}" alt="">

    <h4>{{$comic->series}}</h4>


</div>


@endsection