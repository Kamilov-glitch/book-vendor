@extends('layouts.app')
@section('content')

<div class="container">
    @foreach (App\Models\Book::all() as $book)
        <div class="col-4 pb-3">
            <div class="card">
                <img src="" alt="book image" class="card-img-top">
                <div class="card-header">
                    {{ $book->name }}
                </div>
                <div class="card-body">
                    {{ $book->description }}
                </div>
            </div>
        </div>
        
    @endforeach
</div>

@endsection