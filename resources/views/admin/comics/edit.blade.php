@extends('layouts.app')


@section('content')

@include('partials.validation-errors')

<div class="container">
    <h1>Editing comic: {{$comic->title}}</h1>
    <form action="{{route('admin.comics.update', $comic)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper" placeholder="Spideman" value="{{old('title', $comic->title)}}" />
            <small id="titleHelper" class="form-text text-muted">Add a title for this comic</small>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">thumb</label>
            <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelper" placeholder="https://" value="{{old('thumb', $comic->thumb)}}" />
            <small id="thumbHelper" class="form-text text-muted">Add a thumb for this comic</small>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="number" step="0.01" class="form-control" name="price" id="price" aria-describedby="priceHelper" placeholder="10.99" value="{{old('price', $comic->price)}}" />
            <small id="priceHelper" class="form-text text-muted">Add a price for this comic</small>
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">series</label>
            <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper" placeholder="Spireman 001" value="{{old('series', $comic->series)}}" />
            <small id="seriesHelper" class="form-text text-muted">Add a series for this comic</small>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelper" placeholder="Comic book" value="{{old('type', $comic->type)}}" />
            <small id="typeHelper" class="form-text text-muted">Add a type for this comic</small>
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="date" class="form-control" name="sale_date" id="sale_date" aria-describedby="sale_dateHelper" placeholder="" value="{{old('sale_date', $comic->sale_date)}}" />
            <small id="sale_dateHelper" class="form-text text-muted">Add a sale_date for this comic</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="5">{{old('description', $comic->description)}}</textarea>
        </div>


        <button type="submit" class="btn btn-primary">
            Save
        </button>


    </form>
</div>


@endsection