@extends('layouts.app')


@section('content')
<section>
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <h2>Comics</h2>
            <a class="btn btn-primary rounded-pill" href="{{route('admin.comics.create')}}" role="button">Add new comic</a>
        </div>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">thumb</th>
                        <th scope="col">title</th>
                        <th scope="col">series</th>
                        <th scope="col">actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic )
                    <tr class="">
                        <td scope="row">{{$comic->id}}</td>
                        <td><img width="60" src="{{$comic->thumb}}" alt=""></td>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->series}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('admin.comics.show', $comic)}}">View</a>
                            <a class="btn btn-dark" href="{{route('admin.comics.edit', $comic)}}">Edit</a>

                            <!-- Modal trigger button -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{$comic->id}}">
                                Delete
                            </button>

                            <!-- Modal Body -->
                            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                            <div class="modal fade" id="modal-{{$comic->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitle-{{$comic->id}}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitle-{{$comic->id}}">
                                                Deleting {{$comic->title}}
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this record from the dabase forever?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Close
                                            </button>

                                            <form action="{{route('admin.comics.delete', $comic)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    Confirm
                                                </button>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </td>

                    </tr>

                    @empty
                    <tr class="">
                        <td scope="row">no Items!</td>
                    </tr>

                    @endforelse
                </tbody>
            </table>
        </div>
        {{$comics->links('vendor.pagination.bootstrap-5')}}
    </div>
</section>
@endsection