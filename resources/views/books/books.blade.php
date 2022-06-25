@extends('layouts.app')
@section('content')

<div class="container">
    @foreach (App\Models\Book::all() as $book)
        <div class="col-3 pb-3">
            <div class="card">
                <div class="card-header">
                    <img src="book_image_placeholder.png" alt="book image" class="card-img-top ms-5 pe-1 w-75">
                </div>
                <div class="card-body text-center">
                    <h5>{{ $book->name }}</h5>
                    <div class="d-flex justify-content-center">
                        <h6>{{$book->price}}</h6>
                        <h6 class="text-muted ms-2">
                            <del>{{$book->price}}</del>
                        </h6>
                    </div>
                </div>
                <div class="card-footer">
                    <button class=""></button>
                </div>
            </div>
        </div>
        
    @endforeach
</div>

@endsection