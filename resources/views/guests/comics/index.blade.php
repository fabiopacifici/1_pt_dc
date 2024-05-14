@extends('layouts.app')

@section('content')

<section class="comics">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 row-cols-xxl-6">
            @forelse ($comics as $comic)
            <div class="col">

                <a href="{{route('guests.comics.show', $comic)}}">
                    <img class="img-fluid" src="{{$comic->thumb}}" alt="">
                </a>
                <h4>{{$comic->series}}</h4>
            </div>

            @empty
            <div class="col">
                no comics yet!
            </div>
            @endforelse


        </div>
    </div>
</section>

@endsection