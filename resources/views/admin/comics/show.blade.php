@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Admin view comic </h1>
    <img class="img-fluid" src="{{$comic->thumb}}" alt="">

    <h4>{{$comic->series}}</h4>


</div>


@endsection